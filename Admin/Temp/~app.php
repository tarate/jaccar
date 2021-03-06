<?php
function safe_b64encode($string) { $data = base64_encode($string); $data = str_replace(array('+','/','='),array('-','_',''),$data); return $data; } function safe_b64decode($string) { $data = str_replace(array('-','_'),array('+','/'),$string); $mod4 = strlen($data) % 4; if ($mod4) { $data .= substr('====', $mod4); } return base64_decode($data); } function dhtml($string) { if(is_array($string)) { foreach($string as $key => $val) { $string[$key] = dhtml($val); } } else { $string = str_replace(array('"', '\'', '<', '>', "\t", "\r", '{', '}'), array('&quot;', '&#39;', '&lt;', '&gt;', '&nbsp;&nbsp;', '', '&#123;', '&#125;'), $string); } return $string; } function cvhttp($http){ if ($http==''){ return $http; }else { $link=substr($http,0,7)=="http://"?$http:'http://'.$http; return $link; } } function htmlCv($string) { $pattern = array('/(javascript|jscript|js|vbscript|vbs|about):/i','/on(mouse|exit|error|click|dblclick|key|load|unload|change|move|submit|reset|cut|copy|select|start|stop)/i','/<script([^>]*)>/i','/<iframe([^>]*)>/i','/<frame([^>]*)>/i','/<link([^>]*)>/i','/@import/i'); $replace = array('','','&lt;script${1}&gt;','&lt;iframe${1}&gt;','&lt;frame${1}&gt;','&lt;link${1}&gt;',''); $string = preg_replace($pattern, $replace, $string); $string = str_replace(array('</script>', '</iframe>', '&#'), array('&lt;/script&gt;', '&lt;/iframe&gt;', '&amp;#'), $string); return stripslashes($string); } function RealSize($size) { if ($size < 1024) { return $size.' Byte'; } if ($size < 1048576) { return round($size / 1024, 2).' KB'; } if ($size < 1073741824) { return round($size / 1048576, 2).' MB'; } if ($size < 1099511627776) { return round($size / 1073741824, 2).' GB'; } } function cat_list($cat_id = 0, $selected = 0,$res,$res2, $re_type = true, $level = 0, $is_show_all = true) { $newres = array(); foreach($res2 as $k=>$v) { $newres[$v['cat_id']] = $v['goods_num']; } foreach($res as $k=>$v) { $res[$k]['goods_num'] = $newres[$v['cat_id']]; } if (empty($res) == true) { return $re_type ? '' : array(); } $options = cat_options($cat_id, $res); $children_level = 99999; if ($is_show_all == false) { foreach ($options as $key => $val) { if ($val['level'] > $children_level) { unset($options[$key]); } else { if ($val['is_show'] == 0) { unset($options[$key]); if ($children_level > $val['level']) { $children_level = $val['level']; } } else { $children_level = 99999; } } } } if ($level > 0) { if ($cat_id == 0) { $end_level = $level; } else { $first_item = reset($options); $end_level = $first_item['level'] + $level; } foreach ($options AS $key => $val) { if ($val['level'] >= $end_level) { unset($options[$key]); } } } if ($re_type == true) { $select = ''; foreach ($options AS $var) { $select .= '<option value="' . $var['cat_id'] . '" '; $select .= ($selected == $var['cat_id']) ? "selected='ture'" : ''; $select .= '>'; if ($var['level'] > 0) { $select .= str_repeat('&nbsp;', $var['level'] * 4); } $select .= htmlspecialchars($var['cat_name'], ENT_QUOTES) . '</option>'; } return $select; } else { foreach ($options AS $key => $value) { $options[$key]['url'] = build_uri('category', array('cid' => $value['cat_id']), $value['cat_name']); } return $options; } } function cat_options($spec_cat_id, $arr) { static $cat_options = array(); if (isset($cat_options[$spec_cat_id])) { return $cat_options[$spec_cat_id]; } if (!isset($cat_options[0])) { $level = $last_cat_id = 0; $options = $cat_id_array = $level_array = array(); while (!empty($arr)) { foreach ($arr AS $key => $value) { $cat_id = $value['cat_id']; if ($level == 0 && $last_cat_id == 0) { if ($value['parent_id'] > 0) { break; } $options[$cat_id] = $value; $options[$cat_id]['level'] = $level; $options[$cat_id]['id'] = $cat_id; $options[$cat_id]['name'] = $value['cat_name']; unset($arr[$key]); if ($value['has_children'] == 0) { continue; } $last_cat_id = $cat_id; $cat_id_array = array($cat_id); $level_array[$last_cat_id] = ++$level; continue; } if ($value['parent_id'] == $last_cat_id) { $options[$cat_id] = $value; $options[$cat_id]['level'] = $level; $options[$cat_id]['id'] = $cat_id; $options[$cat_id]['name'] = $value['cat_name']; unset($arr[$key]); if ($value['has_children'] > 0) { if (end($cat_id_array) != $last_cat_id) { $cat_id_array[] = $last_cat_id; } $last_cat_id = $cat_id; $cat_id_array[] = $cat_id; $level_array[$last_cat_id] = ++$level; } } elseif ($value['parent_id'] > $last_cat_id) { break; } } $count = count($cat_id_array); if ($count > 1) { $last_cat_id = array_pop($cat_id_array); } elseif ($count == 1) { if ($last_cat_id != end($cat_id_array)) { $last_cat_id = end($cat_id_array); } else { $level = 0; $last_cat_id = 0; $cat_id_array = array(); continue; } } if ($last_cat_id && isset($level_array[$last_cat_id])) { $level = $level_array[$last_cat_id]; } else { $level = 0; } } $cat_options[0] = $options; } else { $options = $cat_options[0]; } if (!$spec_cat_id) { return $options; } else { if (empty($options[$spec_cat_id])) { return array(); } $spec_cat_id_level = $options[$spec_cat_id]['level']; foreach ($options AS $key => $value) { if ($key != $spec_cat_id) { unset($options[$key]); } else { break; } } $spec_cat_id_array = array(); foreach ($options AS $key => $value) { if (($spec_cat_id_level == $value['level'] && $value['cat_id'] != $spec_cat_id) || ($spec_cat_id_level > $value['level'])) { break; } else { $spec_cat_id_array[$key] = $value; } } $cat_options[$spec_cat_id] = $spec_cat_id_array; return $spec_cat_id_array; } } function build_uri($app, $params, $append = '', $page = 0, $size = 0) { static $rewrite = NULL; if ($rewrite === NULL) { $rewrite = intval($GLOBALS['_CFG']['rewrite']); } $args = array('cid' => 0, 'gid' => 0, 'bid' => 0, 'acid' => 0, 'aid' => 0, 'sid' => 0, 'gbid' => 0, 'auid' => 0, 'sort' => '', 'order' => '', ); extract(array_merge($args, $params)); $uri = ''; switch ($app) { case 'category': if (empty($cid)) { return false; } else { if ($rewrite) { $uri = 'category-' . $cid; if (isset($bid)) { $uri .= '-b' . $bid; } if (isset($price_min)) { $uri .= '-min'.$price_min; } if (isset($price_max)) { $uri .= '-max'.$price_max; } if (isset($filter_attr)) { $uri .= '-attr' . urlencode($filter_attr); } if (!empty($page)) { $uri .= '-' . $page; } if (!empty($sort)) { $uri .= '-' . $sort; } if (!empty($order)) { $uri .= '-' . $order; } } else { $uri = 'category.php?id=' . $cid; if (!empty($bid)) { $uri .= '&amp;brand=' . $bid; } if (isset($price_min)) { $uri .= '&amp;price_min=' . $price_min; } if (isset($price_max)) { $uri .= '&amp;price_max=' . $price_max; } if (isset($filter_attr)) { $uri .='&amp;filter_attr=' . urlencode($filter_attr); } if (!empty($page)) { $uri .= '&amp;page=' . $page; } if (!empty($sort)) { $uri .= '&amp;sort=' . $sort; } if (!empty($order)) { $uri .= '&amp;order=' . $order; } } } break; case 'goods': if (empty($gid)) { return false; } else { $uri = $rewrite ? 'goods-' . $gid : 'goods.php?id=' . $gid; } break; case 'brand': if (empty($bid)) { return false; } else { if ($rewrite) { $uri = 'brand-' . $bid; if (isset($cid)) { $uri .= '-c' . $cid; } if (!empty($page)) { $uri .= '-' . $page; } if (!empty($sort)) { $uri .= '-' . $sort; } if (!empty($order)) { $uri .= '-' . $order; } } else { $uri = 'brand.php?id=' . $bid; if (!empty($cid)) { $uri .= '&amp;cat=' . $cid; } if (!empty($page)) { $uri .= '&amp;page=' . $page; } if (!empty($sort)) { $uri .= '&amp;sort=' . $sort; } if (!empty($order)) { $uri .= '&amp;order=' . $order; } } } break; case 'article_cat': if (empty($acid)) { return false; } else { if ($rewrite) { $uri = 'article_cat-' . $acid; if (!empty($page)) { $uri .= '-' . $page; } if (!empty($sort)) { $uri .= '-' . $sort; } if (!empty($order)) { $uri .= '-' . $order; } } else { $uri = 'article_cat.php?id=' . $acid; if (!empty($page)) { $uri .= '&amp;page=' . $page; } if (!empty($sort)) { $uri .= '&amp;sort=' . $sort; } if (!empty($order)) { $uri .= '&amp;order=' . $order; } } } break; case 'article': if (empty($aid)) { return false; } else { $uri = $rewrite ? 'article-' . $aid : 'article.php?id=' . $aid; } break; case 'group_buy': if (empty($gbid)) { return false; } else { $uri = $rewrite ? 'group_buy-' . $gbid : 'group_buy.php?act=view&amp;id=' . $gbid; } break; case 'auction': if (empty($auid)) { return false; } else { $uri = $rewrite ? 'auction-' . $auid : 'auction.php?act=view&amp;id=' . $auid; } break; case 'snatch': if (empty($sid)) { return false; } else { $uri = $rewrite ? 'snatch-' . $sid : 'snatch.php?id=' . $sid; } break; case 'search': break; default: return false; break; } if ($rewrite) { if ($rewrite == 2 && !empty($append)) { $uri .= '-' . urlencode(preg_replace('/[\.|\/|\?|&|\+|\\\|\'|"|,]+/', '', $append)); } $uri .= '.html'; } if (($rewrite == 2) && (strpos(strtolower(EC_CHARSET), 'utf') !== 0)) { $uri = urlencode($uri); } return $uri; } ?><?php
return array (
  'dispatch_on' => true,
  'dispatch_name' => 'Think',
  'url_model' => 1,
  'path_model' => 2,
  'path_depr' => '/',
  'router_on' => true,
  'component_depr' => '@',
  'component_type' => 1,
  'url_case_insensitive' => false,
  'check_file_case' => false,
  'web_log_record' => false,
  'log_file_size' => 2097152,
  'think_plugin_on' => false,
  'app_auto_setup' => false,
  'limit_resflesh_on' => false,
  'limit_reflesh_times' => 3,
  'debug_mode' => false,
  'error_message' => '您浏览的页面暂时发生了错误！请稍后再试～',
  'error_page' => '',
  'show_error_msg' => true,
  'var_pathinfo' => 's',
  'var_module' => 'm',
  'var_action' => 'a',
  'var_router' => 'r',
  'var_file' => 'f',
  'var_page' => 'p',
  'var_language' => 'l',
  'var_template' => 't',
  'var_ajax_submit' => 'ajax',
  'var_resflesh' => 'h',
  'default_module' => 'Index',
  'default_action' => 'index',
  'module_redirect' => '',
  'action_redirect' => '',
  'tmpl_cache_on' => false,
  'tmpl_cache_time' => -1,
  'tmpl_switch_on' => true,
  'default_template' => 'default',
  'template_suffix' => '.html',
  'cachfile_suffix' => '.php',
  'template_charset' => 'utf-8',
  'output_charset' => 'utf-8',
  'default_layout' => 'Layout:index',
  'contr_class_prefix' => '',
  'contr_class_suffix' => 'Action',
  'action_prefix' => '',
  'action_suffix' => '',
  'model_class_prefix' => '',
  'model_class_suffix' => 'Model',
  'table_name_identify' => true,
  'html_file_suffix' => '.shtml',
  'html_cache_on' => false,
  'html_cache_time' => 60,
  'html_read_type' => 1,
  'html_url_suffix' => '.html',
  'lang_switch_on' => false,
  'lang_cache_on' => false,
  'default_language' => 'zh-cn',
  'time_zone' => 'PRC',
  'user_auth_on' => false,
  'user_auth_type' => 1,
  'user_auth_key' => 'authId',
  'admin_auth_key' => 'administrator',
  'user_auth_model' => 'User',
  'auth_pwd_encoder' => 'md5',
  'user_auth_provider' => 'DaoAuthentictionProvider',
  'user_auth_gateway' => '/Public/login',
  'not_auth_module' => 'Public',
  'require_auth_module' => '',
  'not_auth_action' => '',
  'require_auth_action' => '',
  'guest_auth_on' => true,
  'guest_auth_id' => 0,
  'rbac_error_page' => '',
  'session_name' => 'ThinkID',
  'session_path' => '',
  'session_type' => 'File',
  'session_expire' => '300000',
  'session_table' => 'think_session',
  'session_callback' => '',
  'db_charset' => 'utf8',
  'db_deploy_type' => 0,
  'sql_debug_log' => false,
  'db_fields_cache' => false,
  'sql_mode' => '',
  'fields_depr' => ',',
  'table_describe_sql' => '',
  'db_trigger_prefix' => 'tr_',
  'db_sequence_prefix' => 'seq_',
  'db_case_lower' => true,
  'data_cache_time' => -1,
  'data_cache_compress' => false,
  'data_cache_check' => false,
  'data_cache_type' => 'File',
  'data_cache_subdir' => false,
  'data_cache_table' => 'think_cache',
  'cache_serial_header' => '<?php
//',
  'cache_serial_footer' => '
?>',
  'share_mem_size' => 1048576,
  'action_cache_on' => false,
  'show_run_time' => false,
  'show_adv_time' => false,
  'show_db_times' => false,
  'show_cache_times' => false,
  'show_use_mem' => false,
  'show_page_trace' => false,
  'tmpl_engine_type' => 'Think',
  'tmpl_deny_func_list' => 'echo,exit',
  'tmpl_l_delim' => '{',
  'tmpl_r_delim' => '}',
  'taglib_begin' => '<',
  'taglib_end' => '>',
  'tag_nested_level' => 3,
  'cookie_expire' => 3600,
  'cookie_domain' => '',
  'cookie_path' => '/',
  'cookie_prefix' => '',
  'cookie_secret_key' => '',
  'page_numbers' => 5,
  'list_numbers' => 20,
  'ajax_return_type' => 'JSON',
  'data_result_type' => 0,
  'auto_load_path' => 'Think.Util.',
  'auto_load_class' => '',
  'callback_load_path' => '',
  'upload_file_rule' => 'uniqid',
  'like_match_fields' => '',
  'action_jump_tmpl' => 'Public:success',
  'action_404_tmpl' => 'Public:404',
  'token_on' => true,
  'token_name' => 'think_html_token',
  'token_type' => 'md5',
  'app_domain_deploy' => false,
  'address' => 'china',
  'attach' => true,
  'attachdir' => 'Attachments',
  'attachext' => 'jpg,gif,png',
  'attachsize' => 2097192,
  'company' => 'jaccar',
  'email' => 'test@test.com',
  'fax' => '0000-0000000',
  'linkman' => '管理员',
  'sdata_time' => 60,
  'seodescription' => 'jaccar',
  'seokeywords' => 'jaccar',
  'seotitle' => 'jaccar',
  'sitename' => 'jaccar',
  'siteurl' => 'http://localhost/jaccar',
  'status' => 1,
  'stopd' => '系统维护中.....',
  'sysversion' => 1.1,
  'telephone' => '0000-0000000',
  'think_html_token' => '',
  'thumbmaxheight' => 200,
  'thumbmaxwidth' => 300,
  'thumbsuffix' => '_thumb',
  'db_type' => 'mysql',
  'db_host' => 'localhost',
  'db_name' => 'jaccar',
  'db_user' => 'jaccar',
  'db_pwd' => 'Daic3reidaeW',
  'db_port' => '3306',
  'db_prefix' => 'thinkcms_',
);
?>