<?php

include "simplevk-master/autoload.php";
use DigitalStar\vk_api\VK_api as vk_api; // Использование класса VK Api


// ===== Основные константы =====
const VK_KEY = "Your Token"; // Ключ группы
const ACCESS_KEY = "Your key group"; // Ответ, который должен вернуть сервер
const VERSION = "5.131";  // Версия вашего VK API


$vk = vk_api::create(VK_KEY, VERSION)->setConfirm(ACCESS_KEY);
$data = json_decode(file_get_contents('php://input'));
$vk->initVars($peer_id, $message, $payload, $vk_id, $type, $data);// Инициализация переменных Simple VK

$vk_id = $data->object->from_id; // VK ID 
$peer_id = $data->object->peer_id; // Узнаем ID того, кто написал
$message = $data->object->text; // Текст сообщения пользователя

if ($message == '/online') {
    
    include 'lib/simple_html_dom.php';

    $html = new simple_html_dom();
    
    $url = file_get_html('https://matrp.ru/');
    $html->load($url);
    
    // 01
    foreach ($html->find('*[class="servers__item _one wow animate__animated animate__fadeIn"]') as $p_01) {
        
        foreach ($p_01->find('*[class="item__online"]') as $sn_01) {
            
            $sn_01 = $sn_01->plaintext;
            
        }
        
    }
    // 02
    foreach ($html->find('*[class="servers__item _two wow animate__animated animate__fadeIn"]') as $p_02) {
        
        foreach ($p_02->find('*[class="item__online"]') as $sn_02) {
            
            $sn_02 = $sn_02->plaintext;
            
        }
        
    }
    // 03
    foreach ($html->find('*[class="servers__item _three wow animate__animated animate__fadeIn"]') as $p_03) {
        
        foreach ($p_03->find('*[class="item__online"]') as $sn_03) {
            
            $sn_03 = $sn_03->plaintext;
            
        }
        
    }
    
    // 04
    foreach ($html->find('*[class="servers__item _four wow animate__animated animate__fadeIn"]') as $p_04) {
        
        foreach ($p_04->find('*[class="item__online"]') as $sn_04) {
            
            $sn_04 = $sn_04->plaintext;
            
        }
        
    }
    
    // 05
    foreach ($html->find('*[class="servers__item _five wow animate__animated animate__fadeIn"]') as $p_05) {
        
        foreach ($p_05->find('*[class="item__online"]') as $sn_05) {
            
            $sn_05 = $sn_05->plaintext;
            
        }
        
    }
    
    // 06
    foreach ($html->find('*[class="servers__item _six wow animate__animated animate__fadeIn"]') as $p_06) {
        
        foreach ($p_06->find('*[class="item__online"]') as $sn_06) {
            
            $sn_06 = $sn_06->plaintext;
            
        }
        
    }
    
    // 07
    foreach ($html->find('*[class="servers__item _seven wow animate__animated animate__fadeIn"]') as $p_07) {
        
        foreach ($p_07->find('*[class="item__online"]') as $sn_07) {
            
            $sn_07 = $sn_07->plaintext;
            
        }
        
    }
    
    // 08
    foreach ($html->find('*[class="servers__item _eight wow animate__animated animate__fadeIn"]') as $p_08) {
        
        foreach ($p_08->find('*[class="item__online"]') as $sn_08) {
            
            $sn_08 = $sn_08->plaintext;
            
        }
        
    }
    
    // 09
    foreach ($html->find('*[class="servers__item _nine wow animate__animated animate__fadeIn"]') as $p_09) {
        
        foreach ($p_09->find('*[class="item__online"]') as $sn_09) {
            
            $sn_09 = $sn_09->plaintext;
            
        }
        
    }
    
    // 10
    foreach ($html->find('*[class="servers__item _ten wow animate__animated animate__fadeIn"]') as $p_10) {
        
        foreach ($p_10->find('*[class="item__online"]') as $sn_10) {
            
            $sn_10 = $sn_10->plaintext;
            
        }
        
    }
    
    // 11
    foreach ($html->find('*[class="servers__item _eleven wow animate__animated animate__fadeIn"]') as $p_11) {
        
        foreach ($p_11->find('*[class="item__online"]') as $sn_11) {
            
            $sn_11 = $sn_11->plaintext;
            
        }
        
    }
    
    // 12
    foreach ($html->find('*[class="servers__item _twelve wow animate__animated animate__fadeIn"]') as $p_12) {
        
        foreach ($p_12->find('*[class="item__online"]') as $sn_12) {
            
            $sn_12 = $sn_12->plaintext;
            
        }
        
    }
    // Общий
    
    foreach ($html->find('*[class="title-row"]') as $obsh) {
        
        foreach ($obsh->find('*[class="title__sub"]') as $vsego) {
            
            $vsego = $vsego->plaintext;
            preg_match('/(?<digit>\d+)/', $vsego, $matches);
            $onl = $matches[1];
        }
        
    }

    
$vk->sendMessage($peer_id, "⚡Онлайн серверов MatreshkaRP:\n\n
- ⭐ 01 сервер: $sn_01
- ⭐ 02 сервер: $sn_02
- ⭐ 03 сервер: $sn_03
- ⭐ 04 сервер: $sn_04
- ⭐ 05 сервер: $sn_05
- ⭐ 06 сервер: $sn_06
- ⭐ 07 сервер: $sn_07
- ⭐ 08 сервер: $sn_08
- ⭐ 09 сервер: $sn_09
- ⭐ 10 сервер: $sn_10
- ⭐ 11 сервер: $sn_11
- ⭐ 12 сервер: $sn_12
- ⭐ Общий онлайн: $onl");
    
    
}

// created by kekuk (or sSwaf)
// Matreshka RP BOT (vk)
// 26.11.22
// parser online 