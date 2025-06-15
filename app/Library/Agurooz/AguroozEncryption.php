<?php

namespace App\Library\Agurooz;


class AguroozEncryption
{
    public static function encryptData($data, $secretKey)
    {
        $iv = substr(hash('sha256', $secretKey), 0, 16); // Buat IV dari secret key
        $encryptedData = openssl_encrypt(json_encode($data), 'aes-256-cbc', $secretKey, 0, $iv);

        return base64_encode($iv . $encryptedData); // Gabungkan IV + Data terenkripsi
    }

    /**
     * Membuat HMAC signature berdasarkan data terenkripsi dan institution_back_secret_key
     */
    public static function generateSignature($encryptedData, $secretKey)
    {
        $timestamp = time(); // Waktu saat ini dalam detik
        $dataToSign = $encryptedData . '|' . $timestamp; // Gabungkan data terenkripsi dan waktu
        $signature = hash_hmac('sha256', $dataToSign, $secretKey);

        $final = base64_encode($signature . '|' . $timestamp); // Simpan signature + waktu
        return $final;
    }
}
?>
