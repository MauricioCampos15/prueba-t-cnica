<?php

namespace App\Controller\Abstract;

abstract class AbstractController
{
    final protected function renderView(string $viewPath, array $params = []): void
    {
        $viewPath = str_replace('::', '/', $viewPath);
        $html = file_get_contents(__DIR__ . '/../../Views/' . $viewPath . '.php');
        header ('Content-Type: text/html; charset=UTF-8');
        foreach ($params as $key => $value) {
            if (!is_scalar($value)) {
                continue;
            }
            $html = str_replace("{{ $key }}", $value, $html);
        }
        eval('?>' . $html);
    }

    final protected function jsonReponse(array $json): void
    {
        header('Content-Type: application/json');
        echo json_encode($json);
    }
}