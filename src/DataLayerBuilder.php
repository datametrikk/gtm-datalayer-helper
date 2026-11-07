<?php
namespace Datametrik\GTM;

class DataLayerBuilder {
    public static function renderPush(string $event, array $params = []): string {
        $payload = array_merge(['event' => $event], $params);
        $json = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_HEX_TAG);
        return "<script>window.dataLayer = window.dataLayer || []; window.dataLayer.push({$json});</script>";
    }
}
