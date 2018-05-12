<?php

    declare(strict_types = 1);

    defined('INSIDE') OR exit('No direct script access allowed');

    class C_Settings implements I_Controller {

        private $get = null;

        private $post = null;

        private $model = null;

        private $lang = null;

        function __construct($get, $post) {

            global $data, $debug, $path;

            try {
                $this->get = $get;
                $this->post = $post;

                $this->model = new M_Settings();

                if (!empty($this->get)) {
                    self::handleGET();
                }

                if (!empty($post)) {
                    self::handlePOST();
                }

                require_once($path['classes'] . "topbar.php");

            } catch (Exception $e) {
                if (DEBUG) {
                    $debug->addLog(self::class, __FUNCTION__, __LINE__, get_class($e), $e->getMessage());
                } else {
                    $debug->saveError(self::class, __FUNCTION__, __LINE__, get_class($e), $e->getMessage());
                }
            }
        }

        function handleGET() : void {

            global $data;
            if (!empty($this->get['cp'])) {
                $data->getUser()->setCurrentPlanet(intval($this->get['cp']));
            }
        }

        function handlePOST() : void {

        }

        function display() : void {

            global $config;

            // load view
            $view = new V_Settings();

            $v_lang = $this->model->loadLanguage();

            if (is_array($this->lang) && is_array($v_lang)) {
                $this->lang = array_merge($this->lang, $v_lang);
            } else {
                if (!isset($this->lang) && empty($this->lang) && isset($v_lang) && !empty($v_lang)) {
                    $this->lang = $v_lang;
                }
            }


            $view->assign('lang', $this->lang);
            $view->assign('title', $config['game_name']);
            $view->assign('skinpath', $config['skinpath']);
            $view->assign('copyright', $config['copyright']);
            $view->assign('language', Config::$pathConfig['language']);

            if (!empty($this->get['mode'])) {
                echo $view->loadTemplate($this->get['mode']);
            } else {
                echo $view->loadTemplate();
            }
        }
    }
