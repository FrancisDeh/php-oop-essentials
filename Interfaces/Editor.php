<?php

interface Editor {

    /**
     * sets priviliges for editor
     * @param array $privileges
     */
    public function setEditorPrivileges(array $privileges);
    /**
     * Gets editor privileges
     */
    public function getEditorPrivileges();
}