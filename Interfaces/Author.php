<?php

interface Author {

    /**
     * sets priviliges for authors
     * @param array $privileges
     */
    public function setAuthorPrivileges(array $privileges);
    /**
     * Gets authors privileges
     */
    public function getAuthorPrivileges();
}