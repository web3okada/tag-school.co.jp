<?php
//-------------------------------------------------------------------
// 作成日: 2019/06/27
// 作成者: yamada
// 内  容: カテゴリ 編集
//-------------------------------------------------------------------

//----------------------------------------
//  設定ファイル
//----------------------------------------
require "./config.ini";


//----------------------------------------
//  更新処理
//----------------------------------------
// 操作クラス
$objManage   = new DB_manage( _DNS );
$objCategory = new AD_category( $objManage );

// データ変換
$arr_post = $objCategory->convert( $arr_post );

// データチェック
$message = $objCategory->check( $arr_post, 'update' );

// エラーチェック
if( empty( $message["ng"] ) ) {

	// トランザクション
	$objCategory->_DBconn->StartTrans();

	// 登録処理
	$res = $objCategory->update( $arr_post );

	// ロールバック
	if( $res == false ) {
		$objCategory->_DBconn->RollbackTrans();
		$message["ng"]["all"] = _ERRHEAD . "登録処理に失敗しました。（ブラウザの再起動を行って改善されない場合は、システム管理者へご連絡ください。）<br />";
	}

	// コミット
	$objCategory->_DBconn->CompleteTrans();

}

// クラス削除
unset( $objManage   );
unset( $objCategory );


//----------------------------------------
//  表示
//----------------------------------------
if( empty($message["ng"]) ) {

	// メッセージ保管
	$_SESSION["admin"][_CONTENTS_DIR]["message"]["ok"] = "更新が完了しました。<br />";

	// 表示
	header( "Location: ./index.php" );

} else {

	// smarty設定
	$smarty = new MySmarty("admin");
	$smarty->compile_dir .= "category/";

	// テンプレートに設定
	$smarty->assign( "message" , $message  );
	$smarty->assign( "arr_post", $arr_post );

	// 表示
	$smarty->display( "edit.tpl" );

}
?>