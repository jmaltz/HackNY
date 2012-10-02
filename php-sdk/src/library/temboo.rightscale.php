<?php

/**
 * Temboo PHP SDK RightScale classes
 *
 * Execute Choreographies from the Temboo RightScale bundle.
 *
 * PHP version 5
 *
 * LICENSE: Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @category   Services
 * @package    Temboo
 * @subpackage RightScale
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Terminate an array instance.

 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_TerminateArrayInstances extends Temboo_Choreography
{
    /**
     * Terminate an array instance.

     *
     * @param Temboo_Session $session The session that owns this TerminateArrayInstances choreography.
     * @return RightScale_TerminateArrayInstances New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/TerminateArrayInstances/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this TerminateArrayInstances choreography.
     *
     * @param RightScale_TerminateArrayInstances_Inputs|array $inputs (optional) Inputs as RightScale_TerminateArrayInstances_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_TerminateArrayInstances_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_TerminateArrayInstances_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this TerminateArrayInstances choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_TerminateArrayInstances_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_TerminateArrayInstances_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the TerminateArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_TerminateArrayInstances_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the TerminateArrayInstances choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_TerminateArrayInstances_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this TerminateArrayInstances input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this TerminateArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this TerminateArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerArrayID input for this TerminateArrayInstances choreography.
     *
     * @param int $value (required, integer) Enter the ID of a server array.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function setServerArrayID($value)
    {
        return $this->set('ServerArrayID', $value);
    }

    /**
     * Set the value for the Username input for this TerminateArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_TerminateArrayInstances_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the TerminateArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_TerminateArrayInstances_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the TerminateArrayInstances choreography.
     *
     * @param Temboo_Session $session The session that owns this TerminateArrayInstances execution.
     * @param RightScale_TerminateArrayInstances $choreo The choregraphy object for this execution.
     * @param RightScale_TerminateArrayInstances_Inputs|array $inputs (optional) Inputs as RightScale_TerminateArrayInstances_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_TerminateArrayInstances_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_TerminateArrayInstances $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this TerminateArrayInstances execution.
     *
     * @return RightScale_TerminateArrayInstances_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this TerminateArrayInstances execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_TerminateArrayInstances_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_TerminateArrayInstances_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the TerminateArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_TerminateArrayInstances_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the TerminateArrayInstances choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_TerminateArrayInstances_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this TerminateArrayInstances execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of server assets grouped within a particular RightScale Array. 
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetArrayIndex extends Temboo_Choreography
{
    /**
     * Retrieve a list of server assets grouped within a particular RightScale Array. 
     *
     * @param Temboo_Session $session The session that owns this GetArrayIndex choreography.
     * @return RightScale_GetArrayIndex New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/GetArrayIndex/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetArrayIndex choreography.
     *
     * @param RightScale_GetArrayIndex_Inputs|array $inputs (optional) Inputs as RightScale_GetArrayIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_GetArrayIndex_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_GetArrayIndex_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetArrayIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_GetArrayIndex_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_GetArrayIndex_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetArrayIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetArrayIndex_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetArrayIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_GetArrayIndex_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetArrayIndex input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_GetArrayIndex_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_GetArrayIndex_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetArrayIndex choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_GetArrayIndex_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this GetArrayIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_GetArrayIndex_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this GetArrayIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_GetArrayIndex_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetArrayIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetArrayIndex_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetArrayIndex choreography.
     *
     * @param Temboo_Session $session The session that owns this GetArrayIndex execution.
     * @param RightScale_GetArrayIndex $choreo The choregraphy object for this execution.
     * @param RightScale_GetArrayIndex_Inputs|array $inputs (optional) Inputs as RightScale_GetArrayIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_GetArrayIndex_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_GetArrayIndex $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetArrayIndex execution.
     *
     * @return RightScale_GetArrayIndex_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetArrayIndex execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_GetArrayIndex_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_GetArrayIndex_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetArrayIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetArrayIndex_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetArrayIndex choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_GetArrayIndex_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetArrayIndex execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a RightScale Deployment.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateDeployment extends Temboo_Choreography
{
    /**
     * Create a RightScale Deployment.
     *
     * @param Temboo_Session $session The session that owns this CreateDeployment choreography.
     * @return RightScale_CreateDeployment New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/CreateDeployment/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateDeployment choreography.
     *
     * @param RightScale_CreateDeployment_Inputs|array $inputs (optional) Inputs as RightScale_CreateDeployment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateDeployment_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_CreateDeployment_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateDeployment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateDeployment_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_CreateDeployment_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateDeployment choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateDeployment_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateDeployment choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateDeployment_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateDeployment input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this CreateDeployment choreography.
     *
     * @param int $value (required, integer) Enter a RightScale Account ID.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the DeploymentDefaultEC2AvailabilityZone input for this CreateDeployment choreography.
     *
     * @param string $value (optional, string) Enter the default EC2 availability zone for this deployment.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setDeploymentDefaultEC2AvailabilityZone($value)
    {
        return $this->set('DeploymentDefaultEC2AvailabilityZone', $value);
    }

    /**
     * Set the value for the DeploymentDefaultVPCSubnetHref input for this CreateDeployment choreography.
     *
     * @param string $value (optional, string) Enter the href of the vpc subnet.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setDeploymentDefaultVPCSubnetHref($value)
    {
        return $this->set('DeploymentDefaultVPCSubnetHref', $value);
    }

    /**
     * Set the value for the DeploymentDescription input for this CreateDeployment choreography.
     *
     * @param string $value (optional, string) Describe the deployment being created.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setDeploymentDescription($value)
    {
        return $this->set('DeploymentDescription', $value);
    }

    /**
     * Set the value for the DeploymentNickname input for this CreateDeployment choreography.
     *
     * @param string $value (required, string) Enter the nickname of the deployment being created.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setDeploymentNickname($value)
    {
        return $this->set('DeploymentNickname', $value);
    }

    /**
     * Set the value for the Password input for this CreateDeployment choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CreateDeployment choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_CreateDeployment_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateDeployment choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateDeployment_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateDeployment choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateDeployment execution.
     * @param RightScale_CreateDeployment $choreo The choregraphy object for this execution.
     * @param RightScale_CreateDeployment_Inputs|array $inputs (optional) Inputs as RightScale_CreateDeployment_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateDeployment_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_CreateDeployment $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateDeployment execution.
     *
     * @return RightScale_CreateDeployment_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CreateDeployment execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_CreateDeployment_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_CreateDeployment_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateDeployment choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateDeployment_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateDeployment choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_CreateDeployment_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateDeployment execution.
     *
     * @return string (xml) The response from Rightscale in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Executes a specified RightScript.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_RunRightScript extends Temboo_Choreography
{
    /**
     * Executes a specified RightScript.
     *
     * @param Temboo_Session $session The session that owns this RunRightScript choreography.
     * @return RightScale_RunRightScript New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/RunRightScript/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RunRightScript choreography.
     *
     * @param RightScale_RunRightScript_Inputs|array $inputs (optional) Inputs as RightScale_RunRightScript_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_RunRightScript_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_RunRightScript_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RunRightScript choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_RunRightScript_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_RunRightScript_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RunRightScript choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_RunRightScript_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RunRightScript choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_RunRightScript_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RunRightScript input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this RunRightScript choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this RunRightScript choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the RightScriptID input for this RunRightScript choreography.
     *
     * @param int $value (required, integer) The ID of the RightScript.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setRightScriptID($value)
    {
        return $this->set('RightScriptID', $value);
    }

    /**
     * Set the value for the ServerID input for this RunRightScript choreography.
     *
     * @param int $value (required, integer) Enter the RightScale Server ID that is to be stopped.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the Username input for this RunRightScript choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_RunRightScript_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the RunRightScript choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_RunRightScript_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RunRightScript choreography.
     *
     * @param Temboo_Session $session The session that owns this RunRightScript execution.
     * @param RightScale_RunRightScript $choreo The choregraphy object for this execution.
     * @param RightScale_RunRightScript_Inputs|array $inputs (optional) Inputs as RightScale_RunRightScript_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_RunRightScript_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_RunRightScript $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RunRightScript execution.
     *
     * @return RightScale_RunRightScript_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this RunRightScript execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_RunRightScript_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_RunRightScript_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RunRightScript choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_RunRightScript_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RunRightScript choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_RunRightScript_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RunRightScript execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve server settings for a specified RightScale Server ID.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetServerSettings extends Temboo_Choreography
{
    /**
     * Retrieve server settings for a specified RightScale Server ID.
     *
     * @param Temboo_Session $session The session that owns this GetServerSettings choreography.
     * @return RightScale_GetServerSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/GetServerSettings/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetServerSettings choreography.
     *
     * @param RightScale_GetServerSettings_Inputs|array $inputs (optional) Inputs as RightScale_GetServerSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_GetServerSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_GetServerSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetServerSettings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_GetServerSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_GetServerSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetServerSettings choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetServerSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetServerSettings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_GetServerSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetServerSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this GetServerSettings choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this GetServerSettings choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerID input for this GetServerSettings choreography.
     *
     * @param int $value (required, integer) Enter the RightScale Server ID that is to be stopped.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the Username input for this GetServerSettings choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_GetServerSettings_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the GetServerSettings choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetServerSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetServerSettings choreography.
     *
     * @param Temboo_Session $session The session that owns this GetServerSettings execution.
     * @param RightScale_GetServerSettings $choreo The choregraphy object for this execution.
     * @param RightScale_GetServerSettings_Inputs|array $inputs (optional) Inputs as RightScale_GetServerSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_GetServerSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_GetServerSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetServerSettings execution.
     *
     * @return RightScale_GetServerSettings_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this GetServerSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_GetServerSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_GetServerSettings_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetServerSettings choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_GetServerSettings_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetServerSettings choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_GetServerSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetServerSettings execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Display a comrephensive set of information about the querried array such as: server(s) state information, array templates used, array state, etc.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowArray extends Temboo_Choreography
{
    /**
     * Display a comrephensive set of information about the querried array such as: server(s) state information, array templates used, array state, etc.
     *
     * @param Temboo_Session $session The session that owns this ShowArray choreography.
     * @return RightScale_ShowArray New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/ShowArray/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowArray choreography.
     *
     * @param RightScale_ShowArray_Inputs|array $inputs (optional) Inputs as RightScale_ShowArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowArray_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_ShowArray_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowArray choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowArray_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_ShowArray_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowArray choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowArray_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowArray choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowArray_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowArray input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this ShowArray choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this ShowArray choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerArrayID input for this ShowArray choreography.
     *
     * @param int $value (required, integer) Enter the ID of a server array.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function setServerArrayID($value)
    {
        return $this->set('ServerArrayID', $value);
    }

    /**
     * Set the value for the Username input for this ShowArray choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_ShowArray_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowArray choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowArray_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowArray choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowArray execution.
     * @param RightScale_ShowArray $choreo The choregraphy object for this execution.
     * @param RightScale_ShowArray_Inputs|array $inputs (optional) Inputs as RightScale_ShowArray_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowArray_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_ShowArray $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowArray execution.
     *
     * @return RightScale_ShowArray_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ShowArray execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_ShowArray_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_ShowArray_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowArray choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowArray_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowArray choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_ShowArray_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowArray execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Start an array instance.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_LaunchArrayInstance extends Temboo_Choreography
{
    /**
     * Start an array instance.
     *
     * @param Temboo_Session $session The session that owns this LaunchArrayInstance choreography.
     * @return RightScale_LaunchArrayInstance New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/LaunchArrayInstance/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this LaunchArrayInstance choreography.
     *
     * @param RightScale_LaunchArrayInstance_Inputs|array $inputs (optional) Inputs as RightScale_LaunchArrayInstance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_LaunchArrayInstance_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_LaunchArrayInstance_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this LaunchArrayInstance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_LaunchArrayInstance_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_LaunchArrayInstance_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the LaunchArrayInstance choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_LaunchArrayInstance_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the LaunchArrayInstance choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_LaunchArrayInstance_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this LaunchArrayInstance input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this LaunchArrayInstance choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this LaunchArrayInstance choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerArrayID input for this LaunchArrayInstance choreography.
     *
     * @param int $value (required, integer) Enter the ID of a server array.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function setServerArrayID($value)
    {
        return $this->set('ServerArrayID', $value);
    }

    /**
     * Set the value for the Username input for this LaunchArrayInstance choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_LaunchArrayInstance_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the LaunchArrayInstance choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_LaunchArrayInstance_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the LaunchArrayInstance choreography.
     *
     * @param Temboo_Session $session The session that owns this LaunchArrayInstance execution.
     * @param RightScale_LaunchArrayInstance $choreo The choregraphy object for this execution.
     * @param RightScale_LaunchArrayInstance_Inputs|array $inputs (optional) Inputs as RightScale_LaunchArrayInstance_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_LaunchArrayInstance_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_LaunchArrayInstance $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this LaunchArrayInstance execution.
     *
     * @return RightScale_LaunchArrayInstance_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this LaunchArrayInstance execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_LaunchArrayInstance_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_LaunchArrayInstance_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the LaunchArrayInstance choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_LaunchArrayInstance_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the LaunchArrayInstance choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_LaunchArrayInstance_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this LaunchArrayInstance execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List all operational instances in an array.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ListAllOperationalArrayInstances extends Temboo_Choreography
{
    /**
     * List all operational instances in an array.
     *
     * @param Temboo_Session $session The session that owns this ListAllOperationalArrayInstances choreography.
     * @return RightScale_ListAllOperationalArrayInstances New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/ListAllOperationalArrayInstances/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllOperationalArrayInstances choreography.
     *
     * @param RightScale_ListAllOperationalArrayInstances_Inputs|array $inputs (optional) Inputs as RightScale_ListAllOperationalArrayInstances_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ListAllOperationalArrayInstances_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_ListAllOperationalArrayInstances_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllOperationalArrayInstances choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_ListAllOperationalArrayInstances_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllOperationalArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ListAllOperationalArrayInstances_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllOperationalArrayInstances choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllOperationalArrayInstances input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this ListAllOperationalArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this ListAllOperationalArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerArrayID input for this ListAllOperationalArrayInstances choreography.
     *
     * @param int $value (required, integer) Enter the ID of a server array.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function setServerArrayID($value)
    {
        return $this->set('ServerArrayID', $value);
    }

    /**
     * Set the value for the Username input for this ListAllOperationalArrayInstances choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_ListAllOperationalArrayInstances_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ListAllOperationalArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ListAllOperationalArrayInstances_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllOperationalArrayInstances choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllOperationalArrayInstances execution.
     * @param RightScale_ListAllOperationalArrayInstances $choreo The choregraphy object for this execution.
     * @param RightScale_ListAllOperationalArrayInstances_Inputs|array $inputs (optional) Inputs as RightScale_ListAllOperationalArrayInstances_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ListAllOperationalArrayInstances_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_ListAllOperationalArrayInstances $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllOperationalArrayInstances execution.
     *
     * @return RightScale_ListAllOperationalArrayInstances_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ListAllOperationalArrayInstances execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_ListAllOperationalArrayInstances_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_ListAllOperationalArrayInstances_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllOperationalArrayInstances choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ListAllOperationalArrayInstances_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllOperationalArrayInstances choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_ListAllOperationalArrayInstances_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllOperationalArrayInstances execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Stop a RightScale server instance. Optionally, this Choreo can also poll the stop process and verify server termination.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StopServer extends Temboo_Choreography
{
    /**
     * Stop a RightScale server instance. Optionally, this Choreo can also poll the stop process and verify server termination.
     *
     * @param Temboo_Session $session The session that owns this StopServer choreography.
     * @return RightScale_StopServer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/StopServer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StopServer choreography.
     *
     * @param RightScale_StopServer_Inputs|array $inputs (optional) Inputs as RightScale_StopServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_StopServer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_StopServer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StopServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_StopServer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_StopServer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StopServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StopServer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StopServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_StopServer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StopServer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this StopServer choreography.
     *
     * @param int $value (required, integer) Enter your RightScale Account ID.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this StopServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PollingTimeLimit input for this StopServer choreography.
     *
     * @param int $value (optional, integer) Specify a time limit - in minutes - for the duration of the server state polling.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setPollingTimeLimit($value)
    {
        return $this->set('PollingTimeLimit', $value);
    }

    /**
     * Set the value for the ServerID input for this StopServer choreography.
     *
     * @param int $value (required, integer) Enter the RightScale Server ID that is to be stopped.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the Username input for this StopServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_StopServer_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the StopServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StopServer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StopServer choreography.
     *
     * @param Temboo_Session $session The session that owns this StopServer execution.
     * @param RightScale_StopServer $choreo The choregraphy object for this execution.
     * @param RightScale_StopServer_Inputs|array $inputs (optional) Inputs as RightScale_StopServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_StopServer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_StopServer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StopServer execution.
     *
     * @return RightScale_StopServer_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this StopServer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_StopServer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_StopServer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StopServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StopServer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StopServer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_StopServer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StopServer execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "State" output from this StopServer execution.
     *
     * @return string (string) The server 'state' parsed from the Rightscale response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getState()
    {
        return $this->get('State');
    }
}

/**
 * Retrieve a list of server assets grouped within a particular RightScale Deployment ID. 
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowDeploymentIndex extends Temboo_Choreography
{
    /**
     * Retrieve a list of server assets grouped within a particular RightScale Deployment ID. 
     *
     * @param Temboo_Session $session The session that owns this ShowDeploymentIndex choreography.
     * @return RightScale_ShowDeploymentIndex New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/ShowDeploymentIndex/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowDeploymentIndex choreography.
     *
     * @param RightScale_ShowDeploymentIndex_Inputs|array $inputs (optional) Inputs as RightScale_ShowDeploymentIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowDeploymentIndex_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_ShowDeploymentIndex_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowDeploymentIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowDeploymentIndex_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_ShowDeploymentIndex_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowDeploymentIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowDeploymentIndex_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowDeploymentIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowDeploymentIndex_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowDeploymentIndex input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this ShowDeploymentIndex choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the DeploymentID input for this ShowDeploymentIndex choreography.
     *
     * @param int $value (required, integer) Enter the DeploymentID to only list servers in this particular RightScale deployment.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setDeploymentID($value)
    {
        return $this->set('DeploymentID', $value);
    }

    /**
     * Set the value for the Password input for this ShowDeploymentIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerSettings input for this ShowDeploymentIndex choreography.
     *
     * @param string $value (optional, string) Enter true to display additional information about this RighScale deployment.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setServerSettings($value)
    {
        return $this->set('ServerSettings', $value);
    }

    /**
     * Set the value for the Username input for this ShowDeploymentIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_ShowDeploymentIndex_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowDeploymentIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowDeploymentIndex_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowDeploymentIndex choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowDeploymentIndex execution.
     * @param RightScale_ShowDeploymentIndex $choreo The choregraphy object for this execution.
     * @param RightScale_ShowDeploymentIndex_Inputs|array $inputs (optional) Inputs as RightScale_ShowDeploymentIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowDeploymentIndex_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_ShowDeploymentIndex $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowDeploymentIndex execution.
     *
     * @return RightScale_ShowDeploymentIndex_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ShowDeploymentIndex execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_ShowDeploymentIndex_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_ShowDeploymentIndex_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowDeploymentIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowDeploymentIndex_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowDeploymentIndex choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_ShowDeploymentIndex_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowDeploymentIndex execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Start a server associated with a particular Server ID.  Optionally, this Choreo can also poll the startup process and verify server startup.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StartServer extends Temboo_Choreography
{
    /**
     * Start a server associated with a particular Server ID.  Optionally, this Choreo can also poll the startup process and verify server startup.
     *
     * @param Temboo_Session $session The session that owns this StartServer choreography.
     * @return RightScale_StartServer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/StartServer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this StartServer choreography.
     *
     * @param RightScale_StartServer_Inputs|array $inputs (optional) Inputs as RightScale_StartServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_StartServer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_StartServer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this StartServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_StartServer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_StartServer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the StartServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StartServer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the StartServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_StartServer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this StartServer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this StartServer choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this StartServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the PollingTimeLimit input for this StartServer choreography.
     *
     * @param int $value (optional, integer) Enable server status polling by specifying a time limit - in minutes - for the duration of the server state polling.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setPollingTimeLimit($value)
    {
        return $this->set('PollingTimeLimit', $value);
    }

    /**
     * Set the value for the ServerID input for this StartServer choreography.
     *
     * @param int $value (required, integer) Enter the RightScale Server ID that is to be stopped.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the Username input for this StartServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_StartServer_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the StartServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StartServer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the StartServer choreography.
     *
     * @param Temboo_Session $session The session that owns this StartServer execution.
     * @param RightScale_StartServer $choreo The choregraphy object for this execution.
     * @param RightScale_StartServer_Inputs|array $inputs (optional) Inputs as RightScale_StartServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_StartServer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_StartServer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this StartServer execution.
     *
     * @return RightScale_StartServer_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this StartServer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_StartServer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_StartServer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the StartServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_StartServer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the StartServer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_StartServer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this StartServer execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }

    /**
     * Retrieve the value for the "State" output from this StartServer execution.
     *
     * @return string (string) The server 'state' parsed from the Rightscale response.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getState()
    {
        return $this->get('State');
    }
}

/**
 * Display a comrephensive set of information about the querried server such as: state information, server templates used, SSH key href, etc.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServer extends Temboo_Choreography
{
    /**
     * Display a comrephensive set of information about the querried server such as: state information, server templates used, SSH key href, etc.
     *
     * @param Temboo_Session $session The session that owns this ShowServer choreography.
     * @return RightScale_ShowServer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/ShowServer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowServer choreography.
     *
     * @param RightScale_ShowServer_Inputs|array $inputs (optional) Inputs as RightScale_ShowServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowServer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_ShowServer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowServer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_ShowServer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowServer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowServer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this ShowServer choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this ShowServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ServerID input for this ShowServer choreography.
     *
     * @param int $value (required, integer) Enter the RightScale Server ID that is to be stopped.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function setServerID($value)
    {
        return $this->set('ServerID', $value);
    }

    /**
     * Set the value for the Username input for this ShowServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_ShowServer_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowServer choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowServer execution.
     * @param RightScale_ShowServer $choreo The choregraphy object for this execution.
     * @param RightScale_ShowServer_Inputs|array $inputs (optional) Inputs as RightScale_ShowServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowServer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_ShowServer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowServer execution.
     *
     * @return RightScale_ShowServer_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ShowServer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_ShowServer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_ShowServer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowServer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_ShowServer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowServer execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a RightScale server instance.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServer extends Temboo_Choreography
{
    /**
     * Creates a RightScale server instance.
     *
     * @param Temboo_Session $session The session that owns this CreateServer choreography.
     * @return RightScale_CreateServer New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/CreateServer/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateServer choreography.
     *
     * @param RightScale_CreateServer_Inputs|array $inputs (optional) Inputs as RightScale_CreateServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateServer_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_CreateServer_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateServer_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_CreateServer_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServer_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateServer choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateServer_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateServer input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AKIImage input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter URL to the AKI image.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setAKIImage($value)
    {
        return $this->set('AKIImage', $value);
    }

    /**
     * Set the value for the ARIImage input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter URL to the ARI Image.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setARIImage($value)
    {
        return $this->set('ARIImage', $value);
    }

    /**
     * Set the value for the AccountID input for this CreateServer choreography.
     *
     * @param int $value (required, integer) Enter a RightScale Account ID.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the CloudID input for this CreateServer choreography.
     *
     * @param int $value (optional, integer) Enter the cloud region identifier. If undefined, the default is 1 (us-east).
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setCloudID($value)
    {
        return $this->set('CloudID', $value);
    }

    /**
     * Set the value for the EC2AvailabilityZone input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter the EC2 availablity zone, for example: us-east-1a, or any.  Do not set, if also passing the vpc_subnet_href parameter.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setEC2AvailabilityZone($value)
    {
        return $this->set('EC2AvailabilityZone', $value);
    }

    /**
     * Set the value for the EC2Image input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter URL to AMI image.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setEC2Image($value)
    {
        return $this->set('EC2Image', $value);
    }

    /**
     * Set the value for the EC2SSHKeyHref input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter URL to the SSH Key.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setEC2SSHKeyHref($value)
    {
        return $this->set('EC2SSHKeyHref', $value);
    }

    /**
     * Set the value for the EC2SecurityGroupsHref input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter URL(s) to security group(s). Do not set, if also passing the vpc_subnet_href parameter.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setEC2SecurityGroupsHref($value)
    {
        return $this->set('EC2SecurityGroupsHref', $value);
    }

    /**
     * Set the value for the InstanceType input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter the AWS instance type: small, medium, etc.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setInstanceType($value)
    {
        return $this->set('InstanceType', $value);
    }

    /**
     * Set the value for the MaxSpotPrice input for this CreateServer choreography.
     *
     * @param int $value (optional, integer) Enter the maximum price (a dollar value) dollars) per hour for the spot server.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setMaxSpotPrice($value)
    {
        return $this->set('MaxSpotPrice', $value);
    }

    /**
     * Set the value for the Password input for this CreateServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Pricing input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter: on_demand, OR, spot.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setPricing($value)
    {
        return $this->set('Pricing', $value);
    }

    /**
     * Set the value for the ServerDeployment input for this CreateServer choreography.
     *
     * @param string $value (required, string) Enter the URL of the deployment that this server wil be added to.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setServerDeployment($value)
    {
        return $this->set('ServerDeployment', $value);
    }

    /**
     * Set the value for the ServerNickname input for this CreateServer choreography.
     *
     * @param string $value (required, string) Enter a nickname for the server being created.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setServerNickname($value)
    {
        return $this->set('ServerNickname', $value);
    }

    /**
     * Set the value for the ServerTemplate input for this CreateServer choreography.
     *
     * @param string $value (required, string) Enter the URL to a server template.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setServerTemplate($value)
    {
        return $this->set('ServerTemplate', $value);
    }

    /**
     * Set the value for the Username input for this CreateServer choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

    /**
     * Set the value for the VPCSubnet input for this CreateServer choreography.
     *
     * @param string $value (optional, string) Enter href to the VPC subnet.
     * @return RightScale_CreateServer_Inputs For method chaining.
     */
    public function setVPCSubnet($value)
    {
        return $this->set('VPCSubnet', $value);
    }
}


/**
 * Execution object for the CreateServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServer_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateServer choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateServer execution.
     * @param RightScale_CreateServer $choreo The choregraphy object for this execution.
     * @param RightScale_CreateServer_Inputs|array $inputs (optional) Inputs as RightScale_CreateServer_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateServer_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_CreateServer $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateServer execution.
     *
     * @return RightScale_CreateServer_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CreateServer execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_CreateServer_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_CreateServer_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateServer choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServer_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateServer choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_CreateServer_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateServer execution.
     *
     * @return string (xml) The response from Rightscale in XML format
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of server assets grouped within a particular RightScale Deployment. 
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_IndexDeployments extends Temboo_Choreography
{
    /**
     * Retrieve a list of server assets grouped within a particular RightScale Deployment. 
     *
     * @param Temboo_Session $session The session that owns this IndexDeployments choreography.
     * @return RightScale_IndexDeployments New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/IndexDeployments/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this IndexDeployments choreography.
     *
     * @param RightScale_IndexDeployments_Inputs|array $inputs (optional) Inputs as RightScale_IndexDeployments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_IndexDeployments_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_IndexDeployments_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this IndexDeployments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_IndexDeployments_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_IndexDeployments_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the IndexDeployments choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_IndexDeployments_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the IndexDeployments choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_IndexDeployments_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this IndexDeployments input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this IndexDeployments choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Filter input for this IndexDeployments choreography.
     *
     * @param string $value (optional, string) Specify an attributeName=AttributeValue pair. For example: nickname=mynick; OR description<>mydesc
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function setFilter($value)
    {
        return $this->set('Filter', $value);
    }

    /**
     * Set the value for the Password input for this IndexDeployments choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this IndexDeployments choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_IndexDeployments_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the IndexDeployments choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_IndexDeployments_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the IndexDeployments choreography.
     *
     * @param Temboo_Session $session The session that owns this IndexDeployments execution.
     * @param RightScale_IndexDeployments $choreo The choregraphy object for this execution.
     * @param RightScale_IndexDeployments_Inputs|array $inputs (optional) Inputs as RightScale_IndexDeployments_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_IndexDeployments_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_IndexDeployments $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this IndexDeployments execution.
     *
     * @return RightScale_IndexDeployments_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this IndexDeployments execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_IndexDeployments_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_IndexDeployments_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the IndexDeployments choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_IndexDeployments_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the IndexDeployments choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_IndexDeployments_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this IndexDeployments execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Display an index of all servers in a RightScale account.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServerIndex extends Temboo_Choreography
{
    /**
     * Display an index of all servers in a RightScale account.
     *
     * @param Temboo_Session $session The session that owns this ShowServerIndex choreography.
     * @return RightScale_ShowServerIndex New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/ShowServerIndex/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ShowServerIndex choreography.
     *
     * @param RightScale_ShowServerIndex_Inputs|array $inputs (optional) Inputs as RightScale_ShowServerIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowServerIndex_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_ShowServerIndex_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ShowServerIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowServerIndex_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_ShowServerIndex_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ShowServerIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServerIndex_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ShowServerIndex choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_ShowServerIndex_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ShowServerIndex input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_ShowServerIndex_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_ShowServerIndex_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the AccountID input for this ShowServerIndex choreography.
     *
     * @param string $value (required, string) Enter a RighScale Account ID.
     * @return RightScale_ShowServerIndex_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this ShowServerIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_ShowServerIndex_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this ShowServerIndex choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_ShowServerIndex_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the ShowServerIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServerIndex_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ShowServerIndex choreography.
     *
     * @param Temboo_Session $session The session that owns this ShowServerIndex execution.
     * @param RightScale_ShowServerIndex $choreo The choregraphy object for this execution.
     * @param RightScale_ShowServerIndex_Inputs|array $inputs (optional) Inputs as RightScale_ShowServerIndex_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_ShowServerIndex_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_ShowServerIndex $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ShowServerIndex execution.
     *
     * @return RightScale_ShowServerIndex_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this ShowServerIndex execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_ShowServerIndex_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_ShowServerIndex_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ShowServerIndex choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_ShowServerIndex_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ShowServerIndex choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_ShowServerIndex_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ShowServerIndex execution.
     *
     * @return string (xml) The response from Rightscale in XML format.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Creates a RightScale server instance using a given XML template.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServerXMLInput extends Temboo_Choreography
{
    /**
     * Creates a RightScale server instance using a given XML template.
     *
     * @param Temboo_Session $session The session that owns this CreateServerXMLInput choreography.
     * @return RightScale_CreateServerXMLInput New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/RightScale/CreateServerXMLInput/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateServerXMLInput choreography.
     *
     * @param RightScale_CreateServerXMLInput_Inputs|array $inputs (optional) Inputs as RightScale_CreateServerXMLInput_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateServerXMLInput_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new RightScale_CreateServerXMLInput_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateServerXMLInput choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateServerXMLInput_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new RightScale_CreateServerXMLInput_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateServerXMLInput choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServerXMLInput_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateServerXMLInput choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return RightScale_CreateServerXMLInput_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateServerXMLInput input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the ServerParameters input for this CreateServerXMLInput choreography.
     *
     * @param string $value (required, xml) An XML file containing the required parameters for the server creation. See documentation for XML schema.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function setServerParameters($value)
    {
        return $this->set('ServerParameters', $value);
    }

    /**
     * Set the value for the AccountID input for this CreateServerXMLInput choreography.
     *
     * @param int $value (required, integer) Enter your RightScale Account ID.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function setAccountID($value)
    {
        return $this->set('AccountID', $value);
    }

    /**
     * Set the value for the Password input for this CreateServerXMLInput choreography.
     *
     * @param string $value (required, string) Enter a RightScale account password.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the Username input for this CreateServerXMLInput choreography.
     *
     * @param string $value (required, string) Enter a RightScale username.
     * @return RightScale_CreateServerXMLInput_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }
}


/**
 * Execution object for the CreateServerXMLInput choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServerXMLInput_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateServerXMLInput choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateServerXMLInput execution.
     * @param RightScale_CreateServerXMLInput $choreo The choregraphy object for this execution.
     * @param RightScale_CreateServerXMLInput_Inputs|array $inputs (optional) Inputs as RightScale_CreateServerXMLInput_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return RightScale_CreateServerXMLInput_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, RightScale_CreateServerXMLInput $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateServerXMLInput execution.
     *
     * @return RightScale_CreateServerXMLInput_Results New results object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occured in asynchronous execution.
     * @throws Temboo_Exception_Notfound if execution does not exist.
     * @throws Temboo_Exception if result request fails.
     */
    public function getResults()
    {
        return parent::getResults();
    }

    /**
     * Wraps results in appopriate results class for this CreateServerXMLInput execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return RightScale_CreateServerXMLInput_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new RightScale_CreateServerXMLInput_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateServerXMLInput choreography.
 *
 * @package Temboo
 * @subpackage RightScale
 */
class RightScale_CreateServerXMLInput_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateServerXMLInput choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return RightScale_CreateServerXMLInput_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateServerXMLInput execution.
     *
     * @return string 
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>