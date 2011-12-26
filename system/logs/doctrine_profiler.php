<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

Array
(
    [0] => Array
        (
            [type] => execute
            [query] => SELECT u.id AS u__id, u.username AS u__username, u.password AS u__password, u.fk_personal AS u__fk_personal, u.fk_perfil AS u__fk_perfil, u.created_at AS u__created_at, u.updated_at AS u__updated_at, u.modified_by AS u__modified_by, u.created_by AS u__created_by FROM usuario u WHERE (u.id = ?) LIMIT 1
            [time] => 0.000982
            [params] => Array
                (
                    [0] => 7
                )

        )

)

Total Doctrine time: 0.0075860023498535
Peak Memory: 3544468