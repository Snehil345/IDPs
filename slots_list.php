<?php
// Canonical list of bookable slots. Edit this array to change available timings.
// Keys are used internally as the slot ID; value is the display label.
function get_slot_list() {
    return [
        "1:00 PM - IDP",
        "1:10 PM - IDP",
        "1:30 PM - IDP",
        "2:00 PM - IDP",
        "2:10 PM - IDP",
        "3:00 PM - IDP",
        "3:10 PM - IDP",
        "3:30 PM - IDP",
        "4:00 PM - IDP",
        "4:10 PM - IDP",
        "4:30 PM - IDP",
        "5:00 PM - IDP",
        "5:10 PM - IDP",
        "6:00 PM - IDP",
        "6:10 PM - IDP",
        "7:00 PM - IDP",
        "7:10 PM - IDP",
        "8:00 PM - IDP",
        "8:10 PM - IDP",
        "8:30 PM - IDP",
        "9:10 PM - IDP",
        "9:30 PM - IDP",
        "10:00 PM - IDP",
        "10:10 PM - IDP",
        "10:30 PM - IDP",
        "11:00 PM - IDP",
        "11:10 PM - IDP",
        "11:30 PM - IDP",
        "12:00 AM - IDP",
    ];
}

// slots.json holds { "slot label": "telegram_username", ... } for BOOKED slots only.
// A slot missing from this file is free.
function get_slots_file() {
    return __DIR__ . "/slots.json";
}

function load_booked_slots() {
    $file = get_slots_file();
    if (!file_exists($file)) return [];
    $data = json_decode(file_get_contents($file), true);
    return is_array($data) ? $data : [];
}

function save_booked_slots($data) {
    file_put_contents(get_slots_file(), json_encode($data, JSON_PRETTY_PRINT));
}
?>
