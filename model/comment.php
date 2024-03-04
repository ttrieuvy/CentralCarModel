<?php
require_once 'pdo.php';

function comment_insert($id_user, $id_product, $comment)
{
    $sql = "INSERT INTO db_comment (id_user, id_product, comment) VALUES (?,?,?)";
    pdo_execute($sql, $id_user, $id_product, $comment);
}

function comment_update($id_comment, $id_user, $id_product, $comment)
{
    $sql = "UPDATE comment SET id_user=?,id_product=?,comment=? WHERE id_comment=?";
    pdo_execute($sql, $id_user, $id_product, $comment, $id_comment);
}

function comment_delete($id_comment)
{
    $sql = "DELETE FROM db_comment WHERE id_comment=?";
    if (is_array($id_comment)) {
        foreach ($id_comment as $id) {
            pdo_execute($sql, $id);
        }
    } else {
        pdo_execute($sql, $id_comment);
    }
}

function comment_select_all()
{
    $sql = "SELECT * FROM db_comment ORDER BY id_comment asc";
    return pdo_query($sql);
}

function comment_select_by_id($id_comment)
{
    $sql = "SELECT * FROM db_comment WHERE id_comment=?";
    return pdo_query_one($sql, $id_comment);
}

function comment_exist($id_comment)
{
    $sql = "SELECT count(*) FROM db_comment WHERE id_comment=?";
    return pdo_query_value($sql, $id_comment) > 0;
}

function comment_select_by_product($id_product)
{
    $sql = "SELECT cmt.*, pd.name FROM db_comment cmt JOIN db_product pd ON cmt.id_product=pd.id_product WHERE cmt.id_product=? ORDER BY created_at DESC ";
    return pdo_query($sql, $id_product);
}

