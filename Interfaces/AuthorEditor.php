<?php

class AuthorEditor extends User implements Editor, Author {

    /**
     * Holds privileges for author
     * @var array $authorPrivilegesArray
     */
    private $authorPrivilegesArray;

    /**
     * Holds privileges for editor
     * @var array $editorPrivilegesArray
     */
    private $editorPrivilegesArray;

    /**
     * Sets privileges to author
     * @param array $privileges
     */
    public function setAuthorPrivileges(array $privileges) {
        $this->authorPrivilegesArray = $privileges;
    }

    /**
     * Gets author privileges
     * @return array
     */
    public function getAuthorPrivileges() {
        return $this->authorPrivilegesArray;
    }

    /**
     * Sets editor privileges
     * @param array $privileges
     * 
     */
    public function setEditorPrivileges(array $privileges) {
        $this->editorPrivilegesArray = $privileges;
    }

    /**
     * Gets editor privileges
     * @return array
     */
    public function getEditorPrivileges() {
        return $this->editorPrivilegesArray;
    }
}

$user1 = new AuthorEditor;
$user1->username = "Francis";
$user1->setAuthorPrivileges(["write text", "set punctuation"]);
$user->setEditorPrivileges(["edit text", "edit punctuation"]);

///
$username = $user1->getUsername();
$userPrivileges = array_merge($user1->getAuthorPrivileges(), $user1->getEditorPrivileges());

echo $username . ' has the following privileges';
foreach($userPrivileges as $privilege) {
    echo " { $privilege },";
}

echo ".";