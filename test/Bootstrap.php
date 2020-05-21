<?php
/*
 * session_start() cannot be called once headers are sent,
 * so we are calling it here prior to running any unit tests.
 */
session_start();
