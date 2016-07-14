<?php
class FIREBASE {

  public function Fire_Create($FIREBASE_URL,$DATA,$PATH_NAME,$TYPE){
    $curl = @curl_init();
    curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $PATH_NAME . $TYPE);
    curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PUT" );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $DATA );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $curl );
    curl_close( $curl );
    return $response;
  }

  public function Fire_Read($FIREBASE_URL,$PATH_NAME,$TYPE){
    $curl = @curl_init();
    curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $PATH_NAME . $TYPE );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $curl );
    curl_close( $curl );
    return $response;
  }

  public function Fire_Update($FIREBASE_URL,$DATA,$TYPE){
    $curl = @curl_init();
    curl_setopt( $curl, CURLOPT_URL, $FIREBASE . $TYPE);
    curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "PATCH" );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $DATA );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $curl );
    curl_close( $curl );
    return $response;
  }

  public function Fire_Delete(){
    $curl = @curl_init($FIREBASE_URL,$PATH_NAME,$TYPE);
    curl_setopt( $curl, CURLOPT_URL, $FIREBASE_URL . $PATH_NAME . $TYPE);
    curl_setopt( $curl, CURLOPT_CUSTOMREQUEST, "DELETE" );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, true );
    $response = curl_exec( $curl );
    curl_close( $curl );
    return $response;
  }

}
?>
