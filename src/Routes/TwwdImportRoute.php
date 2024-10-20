<?php
namespace TwwdPhrases\Routes;

use TwwdPhrases\Routes\TwweRoutes;

class TwwdImportRoute extends TwwdRoutes {
    protected $routes = [
        'import' => [
            'methods' => 'POST',
            'callback' => 'import',
            'path' => '/import',
        ]
    ];

    public function boot() {
        $this->register_routes();
    }

    public function import(\WP_REST_Request $request) {
        $params = $request->get_params();
        
        return \rest_ensure_response([
            'success' => true,
            'message' => 'Imported'
        ]);
    }
}
