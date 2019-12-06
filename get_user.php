/*
* how to fetch user based on role 
*/

$param = array(
    'role'    => 'role name',
    'orderby' => 'user_nicename', // feild value on which you want to sort value
    'order'   => 'ASC' //for desc or asc of your choice
);
$users = get_users( $param );
