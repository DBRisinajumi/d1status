d1status
========

Status module

install
========

'import'     => array(
'vendor.sammaye.auditrail2.models.*',
),

'components' => array(
    'vendor.sammaye.auditrail2.behaviors.LoggableBehavior' => array(
        'tableAuditTrail' => 's_audit_trail',
    ),
