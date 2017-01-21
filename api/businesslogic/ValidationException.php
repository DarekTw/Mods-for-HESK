<?php

class ValidationException extends Exception {
    public $validationModel;

    /**
     * ValidationException constructor.
     * @param ValidationModel $validationModel The validatio model
     * @throws Exception If the validationModel's errorKeys is empty
     */
    function __construct($validationModel) {
        if (count($validationModel->errorKeys) === 0) {
            throw new Exception('Tried to throw a ValidationException, but the validation model was valid!');
        }

        $this->validationModel = $validationModel;
    }
}