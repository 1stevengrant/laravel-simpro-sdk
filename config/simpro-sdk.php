<?php

return [

    /*
     * The base URL of your Simpro instance, e.g. https://yourcompany.simprosuite.com
     * The SDK appends /api/v1.0/... paths to this.
     */
    'base_url' => env('SIMPRO_BASE_URL'),

    /*
     * OAuth2 access token. Takes precedence over api_key when both are set.
     * Use this for OAuth2 (authorization code or client credentials) flows.
     */
    'access_token' => env('SIMPRO_ACCESS_TOKEN'),

    /*
     * Long-lived static API key, used when access_token is not provided.
     */
    'api_key' => env('SIMPRO_API_KEY'),

];
