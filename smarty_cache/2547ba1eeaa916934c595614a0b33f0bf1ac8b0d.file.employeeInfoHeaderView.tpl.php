<?php /* Smarty version Smarty-3.0.7, created on 2015-06-04 11:43:36
         compiled from "C:\xampp\htdocs\broodjesalami\php_cm/modules/interface/templates\employee/employeeInfoHeaderView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1139855701dc8e13b71-29174399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2547ba1eeaa916934c595614a0b33f0bf1ac8b0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\broodjesalami\\php_cm/modules/interface/templates\\employee/employeeInfoHeaderView.tpl',
      1 => 1433407469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1139855701dc8e13b71-29174399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- employeeInfoHeaderView.tpl -->
<?php $_smarty_tpl->tpl_vars['valueObject'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getValueObject(), null, null);?>
<table border="0" cellspacing="0" cellpadding="2" style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getDisplayWidth();?>
;">
    <tr>
        <?php $_smarty_tpl->tpl_vars['displayablePhoto'] = new Smarty_variable($_smarty_tpl->getVariable('interfaceObject')->value->getDisplayablePhoto(), null, null);?>
        <?php if (!empty($_smarty_tpl->getVariable('displayablePhoto',null,true,false)->value)){?>
        <td style="width:<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPhotoWidth();?>
px; padding-right:10px;">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showAddPhotoLink()){?>
            <a href="" onClick="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getAddPhotoLink();?>
;return false" title="<?php echo TXT_UCF('UPLOAD_PHOTO_THUMBNAIL');?>
" style="border:0">
            <?php }?>
                <img src="<?php echo $_smarty_tpl->getVariable('displayablePhoto')->value;?>
" alt="<?php echo $_smarty_tpl->getVariable('valueObject')->value->getEmployeeName();?>
" width="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPhotoWidth();?>
" height="<?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getPhotoHeight();?>
">
            <?php if ($_smarty_tpl->getVariable('interfaceObject')->value->showAddPhotoLink()){?>
            </a>
            <?php }?>

        </td>
        <?php }?>
        <td style="vertical-align:middle">
            <h1 title="<?php echo TXT_UCF('EMPLOYEE');?>
"><?php echo $_smarty_tpl->getVariable('valueObject')->value->getEmployeeName();?>
</h1>
            <?php $_smarty_tpl->tpl_vars['department'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getDepartmentName(), null, null);?>
            <?php if (!empty($_smarty_tpl->getVariable('department',null,true,false)->value)){?>
            <div title="<?php echo TXT_UCF('DEPARTMENT');?>
"><?php echo $_smarty_tpl->getVariable('department')->value;?>
</div>
            <?php }?>
            <?php $_smarty_tpl->tpl_vars['bossName'] = new Smarty_variable($_smarty_tpl->getVariable('valueObject')->value->getBossName(), null, null);?>
            <?php if (!empty($_smarty_tpl->getVariable('bossName',null,true,false)->value)){?>
            <div title="<?php echo TXT_UCF('MANAGER');?>
"><?php echo $_smarty_tpl->getVariable('bossName')->value;?>
</div>
            <?php }?>
        </td>
        <td style="width:50px; text-align:right; vertical-align:top;">
            <?php echo $_smarty_tpl->getVariable('interfaceObject')->value->getActionLinks();?>

        </td>
    </tr>
</table>
<!-- /employeeInfoHeaderView.tpl -->