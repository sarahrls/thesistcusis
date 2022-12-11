<?php

class AdvanceEncryptionStandard
{
    protected $cipher;
    protected $key;
    protected $iv;

   
    public function __construct($key, $cipher = 'AES-256-CBC', $iv = null){
        $this->cipher = $cipher;
        $this->key = $key;
        $this->iv = $iv;
    }

    public function encryptData($data){
        if ($this->iv){
        	$iv = $this->iv;
        } 
        else{
        	$iv = base64_encode(random_bytes(openssl_cipher_iv_length($this->cipher)));
        }
        $encrypted = openssl_encrypt($data, $this->cipher, base64_decode($this->key), 0, base64_decode($iv));
        if ($this->iv == null){
            return $encrypted . ':' . $iv;
        }
        return $encrypted;
    }

   
    public function decryptData($data, $randomIv = false){
        if ($randomIv){
            $parts = explode(':', $data);
            $encrypted = $parts[0];
            $iv = base64_decode($parts[1]);
        } 
        else{
            $encrypted = $data;
            $iv = base64_decode($this->iv);
        }
        $decrypted = openssl_decrypt($encrypted, $this->cipher, base64_decode($this->key), 0, $iv);
        return $decrypted;
    }
}



