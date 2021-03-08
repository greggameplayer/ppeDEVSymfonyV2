<?php

namespace Container8t4T0w1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_03UJgnxService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.03UJgnx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.03UJgnx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\HospitalController::homepageHospital' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\HospitalController::manageService' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController::addPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController::delPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController::index' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController::staysPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\StaffController::createNewStaffMember' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\StaffController::homepageStaff' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\StayController::addStayandPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\StayController::homepageStay' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController::logConnection' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController::logManagePatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController::logManageStay' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\HospitalController:homepageHospital' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\HospitalController:manageService' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController:addPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController:delPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController:index' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\PatientController:staysPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\StaffController:createNewStaffMember' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\StaffController:homepageStaff' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\StayController:addStayandPatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\StayController:homepageStay' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController:logConnection' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController:logManagePatient' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'App\\Controller\\logController:logManageStay' => ['privates', '.service_locator.UBsX6gB', 'get_ServiceLocator_UBsX6gBService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\HospitalController::homepageHospital' => '?',
            'App\\Controller\\HospitalController::manageService' => '?',
            'App\\Controller\\PatientController::addPatient' => '?',
            'App\\Controller\\PatientController::delPatient' => '?',
            'App\\Controller\\PatientController::index' => '?',
            'App\\Controller\\PatientController::staysPatient' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\StaffController::createNewStaffMember' => '?',
            'App\\Controller\\StaffController::homepageStaff' => '?',
            'App\\Controller\\StayController::addStayandPatient' => '?',
            'App\\Controller\\StayController::homepageStay' => '?',
            'App\\Controller\\logController::logConnection' => '?',
            'App\\Controller\\logController::logManagePatient' => '?',
            'App\\Controller\\logController::logManageStay' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\HospitalController:homepageHospital' => '?',
            'App\\Controller\\HospitalController:manageService' => '?',
            'App\\Controller\\PatientController:addPatient' => '?',
            'App\\Controller\\PatientController:delPatient' => '?',
            'App\\Controller\\PatientController:index' => '?',
            'App\\Controller\\PatientController:staysPatient' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\StaffController:createNewStaffMember' => '?',
            'App\\Controller\\StaffController:homepageStaff' => '?',
            'App\\Controller\\StayController:addStayandPatient' => '?',
            'App\\Controller\\StayController:homepageStay' => '?',
            'App\\Controller\\logController:logConnection' => '?',
            'App\\Controller\\logController:logManagePatient' => '?',
            'App\\Controller\\logController:logManageStay' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
