d1status
========

Status module

install
========

    'import'     => array(
    'vendor.sammaye.auditrail2.models.*',
    ),

    'modules'    => array(
        'D1Status'=> array(
            'class' => 'vendor.dbrisinajumi.d1status.D1StatusModule',
        ),

    'components' => array(
        'vendor.sammaye.auditrail2.behaviors.LoggableBehavior' => array(
            'tableAuditTrail' => 's_audit_trail',
        ),
