<?php
/* Smarty version 3.1.33, created on 2019-02-07 11:28:48
  from 'C:\xampp\htdocs\vanilaforum\themes\EmbedFriendly\views\default.master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c5c167050f054_39545310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f84769c9dee7d68e2535cad3ef04a0c84489797' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vanilaforum\\themes\\EmbedFriendly\\views\\default.master.tpl',
      1 => 1549538382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c5c167050f054_39545310 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.asset.php','function'=>'smarty_function_asset',),1=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.link.php','function'=>'smarty_function_link',),2=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.logo.php','function'=>'smarty_function_logo',),3=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.dashboard_link.php','function'=>'smarty_function_dashboard_link',),4=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.discussions_link.php','function'=>'smarty_function_discussions_link',),5=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.activity_link.php','function'=>'smarty_function_activity_link',),6=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.inbox_link.php','function'=>'smarty_function_inbox_link',),7=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.custom_menu.php','function'=>'smarty_function_custom_menu',),8=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.profile_link.php','function'=>'smarty_function_profile_link',),9=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.signinout_link.php','function'=>'smarty_function_signinout_link',),10=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.breadcrumbs.php','function'=>'smarty_function_breadcrumbs',),11=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.module.php','function'=>'smarty_function_module',),12=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.searchbox.php','function'=>'smarty_function_searchbox',),13=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.vanillaurl.php','function'=>'smarty_function_vanillaurl',),14=>array('file'=>'C:\\xampp\\htdocs\\vanilaforum\\library\\SmartyPlugins\\function.event.php','function'=>'smarty_function_event',),));
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['CurrentLocale']->value['Lang'];?>
">
<head>
    <?php echo smarty_function_asset(array('name'=>'Head'),$_smarty_tpl);?>

</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BodyID']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['BodyClass']->value;?>
">

<div id="Frame">
    <div id="Head">
        <div class="Row">
            <strong class="SiteTitle"><a href="<?php echo smarty_function_link(array('path'=>"/"),$_smarty_tpl);?>
"><?php echo smarty_function_logo(array(),$_smarty_tpl);?>
</a></strong>
            <ul class="SiteMenu">
                <?php echo smarty_function_dashboard_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_discussions_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_activity_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_inbox_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_custom_menu(array(),$_smarty_tpl);?>

                <?php echo smarty_function_profile_link(array(),$_smarty_tpl);?>

                <?php echo smarty_function_signinout_link(array(),$_smarty_tpl);?>

            </ul>
        </div>
    </div>
    <div id="Body">
        <div class="Row">
            <div class="BreadcrumbsWrapper P"><?php echo smarty_function_breadcrumbs(array(),$_smarty_tpl);?>
</div>
            <div class="Column PanelColumn" id="Panel">
                <?php echo smarty_function_module(array('name'=>"MeModule",'CssClass'=>"FlyoutRight"),$_smarty_tpl);?>

                <?php echo smarty_function_asset(array('name'=>"Panel"),$_smarty_tpl);?>

                <div class="SiteSearch"><?php echo smarty_function_searchbox(array(),$_smarty_tpl);?>
</div>
            </div>
            <div class="Column ContentColumn" id="Content"><?php echo smarty_function_asset(array('name'=>"Content"),$_smarty_tpl);?>
</div>
        </div>
    </div>
    <div id="Foot">
        <div class="Row">
            <a href="<?php echo smarty_function_vanillaurl(array(),$_smarty_tpl);?>
" class="PoweredByVanilla">Powered by Vanilla</a>
            <?php echo smarty_function_asset(array('name'=>"Foot"),$_smarty_tpl);?>

        </div>
    </div>
</div>
<?php echo smarty_function_event(array('name'=>"AfterBody"),$_smarty_tpl);?>

</body>
</html>
<?php }
}
