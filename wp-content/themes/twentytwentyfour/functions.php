<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */

/**
 * Register block styles.
 */

if ( ! function_exists( 'twentytwentyfour_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_styles() {

		register_block_style(
			'core/details',
			array(
				'name'         => 'arrow-icon-details',
				'label'        => __( 'Arrow icon', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-arrow-icon-details {
					padding-top: var(--wp--preset--spacing--10);
					padding-bottom: var(--wp--preset--spacing--10);
				}

				.is-style-arrow-icon-details summary {
					list-style-type: "\2193\00a0\00a0\00a0";
				}

				.is-style-arrow-icon-details[open]>summary {
					list-style-type: "\2192\00a0\00a0\00a0";
				}',
			)
		);
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'twentytwentyfour' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'twentytwentyfour' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		register_block_style(
			'core/heading',
			array(
				'name'         => 'asterisk',
				'label'        => __( 'With asterisk', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-asterisk:before {
					content: '';
					width: 1.5rem;
					height: 3rem;
					background: var(--wp--preset--color--contrast-2, currentColor);
					clip-path: path('M11.93.684v8.039l5.633-5.633 1.216 1.23-5.66 5.66h8.04v1.737H13.2l5.701 5.701-1.23 1.23-5.742-5.742V21h-1.737v-8.094l-5.77 5.77-1.23-1.217 5.743-5.742H.842V9.98h8.162l-5.701-5.7 1.23-1.231 5.66 5.66V.684h1.737Z');
					display: block;
				}

				/* Hide the asterisk if the heading has no content, to avoid using empty headings to display the asterisk only, which is an A11Y issue */
				.is-style-asterisk:empty:before {
					content: none;
				}

				.is-style-asterisk:-moz-only-whitespace:before {
					content: none;
				}

				.is-style-asterisk.has-text-align-center:before {
					margin: 0 auto;
				}

				.is-style-asterisk.has-text-align-right:before {
					margin-left: auto;
				}

				.rtl .is-style-asterisk.has-text-align-left:before {
					margin-right: auto;
				}",
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_styles' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'twentytwentyfour_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'twentytwentyfour-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_block_stylesheets' );

/**
 * Register pattern categories.
 */

if ( ! function_exists( 'twentytwentyfour_pattern_categories' ) ) :
	/**
	 * Register pattern categories
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function twentytwentyfour_pattern_categories() {

		register_block_pattern_category(
			'twentytwentyfour_page',
			array(
				'label'       => _x( 'Pages', 'Block pattern category', 'twentytwentyfour' ),
				'description' => __( 'A collection of full page layouts.', 'twentytwentyfour' ),
			)
		);
	}
endif;

add_action( 'init', 'twentytwentyfour_pattern_categories' );






// 
// 
// 
// 
// 
// Adiciona as colunas na listagem de posts
function conteudo_add_columns($columns) {
    $columns['anos_que_possuem_acesso'] = 'Anos que possuem acesso';
    $columns['acesso'] = 'Roles';
    $columns['matriz'] = 'Matrizes';
    return $columns;
}
add_filter('manage_conteudo_posts_columns', 'conteudo_add_columns');

function conteudo_make_columns_sortable($columns) {
    $columns['anos_que_possuem_acesso'] = 'anos_que_podem_acessar';
    $columns['acesso'] = 'acesso';
    return $columns;
}
add_filter('manage_edit-conteudo_sortable_columns', 'conteudo_make_columns_sortable');

function conteudo_orderby($query) {
    if (!is_admin()) {
        return;
    }

    $orderby = $query->get('orderby');

    if ($orderby === 'anos_que_podem_acessar') {
        $query->set('meta_key', 'anos_que_podem_acessar');
        $query->set('orderby', 'meta_value_num');
    }

    if ($orderby === 'acesso') {
        $query->set('meta_key', 'acesso');
        $query->set('orderby', 'meta_value');
    }
}
add_action('pre_get_posts', 'conteudo_orderby');

function conteudo_fill_columns($column, $post_id) {
    if ($column === 'anos_que_possuem_acesso') {
        $acf_field = get_field("anos_que_podem_acessar", $post_id);
        echo $acf_field ? esc_html($acf_field) : ' - ';
		return;
    }

    if ($column === 'acesso') {
        $acf_field = get_field("acesso", $post_id);
        echo $acf_field ? esc_html($acf_field) : ' - ';
		return;
    }

    if ($column === 'matriz') {
        $acf_field = get_field("matriz", $post_id);
        if (!$acf_field) {
            echo " - "; 
            return;
        }

        $text = ''; 

        if (is_array($acf_field)) {
            $mapped = array_map(function($post_id) {
                $post = get_post($post_id);
                return $post ? get_the_title($post) : ' - '; 
            }, $acf_field);
            $text = implode(", ", $mapped);
        }

        echo esc_html($text);
		return;
    }
}
add_action('manage_conteudo_posts_custom_column', 'conteudo_fill_columns', 10, 2);

function conteudo_add_filters() {
    global $typenow;

    if ($typenow == 'conteudo') {
        $anos_que_possuem_acesso = isset($_GET['anos_que_possuem_acesso']) ? $_GET['anos_que_possuem_acesso'] : '';
        ?>
        <select name="anos_que_possuem_acesso">
            <option value=""><?php _e('Filtrar por Anos', 'textdomain'); ?></option>
            <option value="1" <?php selected($anos_que_possuem_acesso, '1'); ?>>1º Ano</option>
            <option value="2" <?php selected($anos_que_possuem_acesso, '2'); ?>>2º Ano</option>
            <option value="3" <?php selected($anos_que_possuem_acesso, '3'); ?>>3º Ano</option>
            <option value="4" <?php selected($anos_que_possuem_acesso, '4'); ?>>4º Ano</option>
            <option value="5" <?php selected($anos_que_possuem_acesso, '5'); ?>>5º Ano</option>
            <option value="6" <?php selected($anos_que_possuem_acesso, '6'); ?>>6º Ano</option>
            <option value="7" <?php selected($anos_que_possuem_acesso, '7'); ?>>7º Ano</option>
            <option value="8" <?php selected($anos_que_possuem_acesso, '8'); ?>>8º Ano</option>
            <option value="9" <?php selected($anos_que_possuem_acesso, '9'); ?>>9º Ano</option>
        </select>
        <?php

        $acesso = isset($_GET['acesso']) ? $_GET['acesso'] : '';
        ?>
        <select name="acesso">
            <option value=""><?php _e('Filtrar por Roles', 'textdomain'); ?></option>
            <option value="professor" <?php selected($acesso, 'professor'); ?>>Professor</option>
            <option value="aluno" <?php selected($acesso, 'aluno'); ?>>Aluno</option>
        </select>
<!--         <?php

        $matriz = isset($_GET['matriz']) ? $_GET['matriz'] : '';
        $matrizes = get_posts(array(
            'post_type' => 'matriz',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        ));
        ?>
        <select name="matriz">
            <option value=""><?php _e('Filtrar por Matrizes', 'textdomain'); ?></option>
            <?php
            foreach ($matrizes as $matriz_post) {
                ?>
                <option value="<?php echo $matriz_post->ID; ?>" <?php selected($matriz, $matriz_post->ID); ?>>
                    <?php echo esc_html($matriz_post->post_title); ?>
                </option>
                <?php
            }
            ?>
        </select> -->
        <?php
    }
}
add_action('restrict_manage_posts', 'conteudo_add_filters');

function conteudo_apply_filters($query) {
    if (!is_admin() || !$query->is_main_query() || $query->get('post_type') != 'conteudo') {
        return;
    }

    if (isset($_GET['anos_que_possuem_acesso']) && !empty($_GET['anos_que_possuem_acesso'])) {
        $query->set('meta_key', 'anos_que_podem_acessar');
        $query->set('meta_value', sanitize_text_field($_GET['anos_que_possuem_acesso']));
    }

    if (isset($_GET['acesso']) && !empty($_GET['acesso'])) {
        $query->set('meta_key', 'acesso');
        $query->set('meta_value', sanitize_text_field($_GET['acesso']));
    }

//     if (isset($_GET['matriz']) && !empty($_GET['matriz'])) {
//         $query->set('meta_query', array(
//             array(
//                 'key' => 'matriz',
//                 'value' => '"' . sanitize_text_field($_GET['matriz']) . '"', 
//                 'compare' => 'LIKE'
//             )
//         ));
//     }

}
add_action('pre_get_posts', 'conteudo_apply_filters');

add_action('admin_init', function () {
    // Remover suporte para atributos de página e imagem destacada
    remove_post_type_support('page', 'page-attributes');
    remove_post_type_support('page', 'thumbnail');
});

function disable_editor_for_page($use_block_editor, $post_type) {
    // Verifica se o post type é "page" e desativa o editor
    if ($post_type === 'page') {
        return false;
    }

    return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'disable_editor_for_page', 10, 2);

// Hook para personalizar as metaboxes visíveis
add_action('add_meta_boxes', function () {
    // Remover metaboxes padrão
    remove_meta_box('pageparentdiv', 'page', 'side'); // Remove atributos de página
    remove_meta_box('postimagediv', 'page', 'side'); // Remove imagem destacada
}, 100);

// Personalizar o estilo do editor para limitar edições
add_action('admin_head', function () {
    echo '<style>
        #postdivrich { display: none; } /* Oculta o editor de conteúdo */
    </style>';
});


add_action('admin_head', function() {
    $screen = get_current_screen();
    if ($screen->post_type === 'page') {
        // Oculta botões de adicionar e excluir
        echo '<style>
            .page-title-action, .row-actions .trash, #delete-action { display: none !important; }
            #titlediv { pointer-events: none; opacity: 0.5; }
        </style>';
    }
});

add_action('admin_notices', function() {
    $screen = get_current_screen();
    if ($screen->post_type === 'page' && $screen->action === 'add') {
        wp_die(__('Você não tem permissão para adicionar novas páginas.', 'textdomain'));
    }
});


