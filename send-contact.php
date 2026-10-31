<?php
/**
 * DOCTOR AGUA VZLA - PROCESADOR DE FORMULARIO DE CONTACTO
 * Procesa peticiones POST con sanitización y respuesta JSON.
 */

header('Content-Type: application/json; charset=UTF-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode([
        'success' => false,
        'message' => 'Método no permitido. Solo peticiones POST.'
    ]);
    exit;
}

// Sanitizar y recibir datos
$nombre   = isset($_POST['nombre']) ? trim(strip_tags($_POST['nombre'])) : '';
$telefono = isset($_POST['telefono']) ? trim(strip_tags($_POST['telefono'])) : '';
$email    = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$servicio = isset($_POST['servicio']) ? trim(strip_tags($_POST['servicio'])) : '';
$mensaje  = isset($_POST['mensaje']) ? trim(strip_tags($_POST['mensaje'])) : '';

// Validaciones básicas
if (empty($nombre) || empty($telefono)) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => 'Por favor, ingresa al menos tu nombre y número de contacto.'
    ]);
    exit;
}

// Opcional: Registro en archivo de log para no perder ningún lead comercial
$logEntry = date('Y-m-d H:i:s') . " | Nombre: $nombre | Tel: $telefono | Email: $email | Servicio: $servicio | Mensaje: $mensaje\n";
@file_put_contents(__DIR__ . '/data/mensajes_contacto.log', $logEntry, FILE_APPEND);

// Simulación exitosa (puedes configurar mail() si tienes SMTP activo)
echo json_encode([
    'success' => true,
    'message' => "¡Muchas gracias, $nombre! Hemos recibido tu solicitud sobre '$servicio'. El equipo de Doctor Agua te contactará de inmediato por WhatsApp o teléfono."
]);
exit;
