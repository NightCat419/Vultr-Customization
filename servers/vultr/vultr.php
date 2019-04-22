<?php
require 'loader.php';

//error_reporting(E_ALL);


function vultr_ConfigOptions($params)
{
//    logModuleCall('Vultr Provision', 'vultr_ConfigOptions', 'vultr_ConfigOptions', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->getConfigOptions();
}

function vultr_CreateAccount($params)
{
//    logModuleCall('Vultr Provision', 'vultr_CreateAccount', 'vultr_CreateAccount', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->createAccount();
}

function vultr_SuspendAccount($params)
{
//    logModuleCall('Vultr Provision', 'vultr_SuspendAccount', 'vultr_SuspendAccount', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->suspendAccount();
}

function vultr_UnsuspendAccount($params)
{
//    logModuleCall('Vultr Provision', 'vultr_UnsuspendAccount', 'vultr_UnsuspendAccount', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->unsuspendAccount();
}

function vultr_TerminateAccount($params)
{
//    logModuleCall('Vultr Provision', 'vultr_TerminateAccount', 'vultr_TerminateAccount', '1', $this->params);
    $vultr = new Vultr($params);
    return $vultr->terminateAccount();
}

function vultr_ChangePackage($params)
{
//    logModuleCall('Vultr Provision', 'vultr_ChangePackage', 'vultr_ChangePackage', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->changePackage();
}

function vultr_ClientArea($params)
{
//    logModuleCall('Vultr Provision', 'vultr_ClientArea', 'vultr_ClientArea', '1', $params);
    $render = new Vultrender($params);
    return $render->render('ClientArea');
}

function vultr_AdminCustomButtonArray($params)
{
//    logModuleCall('Vultr Provision', 'vultr_AdminCustomButtonArray', 'vultr_AdminCustomButtonArray', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->getAdminCustomButtonArray();
}

function vultr_start($params)
{
//    logModuleCall('Vultr Provision', 'vultr_start', 'vultr_start', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->start();
}

function vultr_reboot($params)
{
//    logModuleCall('Vultr Provision', 'vultr_reboot', 'vultr_reboot', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->reboot();
}

function vultr_halt($params)
{
//    logModuleCall('Vultr Provision', 'vultr_halt', 'vultr_halt', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->halt();
}

function vultr_reinstall($params)
{
//    logModuleCall('Vultr Provision', 'vultr_reinstall', 'vultr_reinstall', '1', $params);
    $vultr = new Vultr($params);
    return $vultr->reinstall();
}

function vultr_AdminServicesTabFieldsSave(array $params)
{
//    logModuleCall('Vultr Provision', 'vultr_AdminServicesTabFieldsSave', 'vultr_AdminServicesTabFieldsSave', '1', $params);
    $vultr = new Vultr($params);
    $vultr->verifyAdminServiceSave();
}
