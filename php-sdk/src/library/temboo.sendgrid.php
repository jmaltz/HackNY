<?php

/**
 * Temboo PHP SDK SendGrid classes
 *
 * Execute Choreographies from the Temboo SendGrid bundle.
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
 * @subpackage SendGrid
 * @author     Temboo, Inc.
 * @copyright  2012 Temboo, Inc.
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
 * @version    1.7
 * @link       http://live.temboo.com/sdk/php
 */


/**
 * Edit a newsletter identity.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_EditIdentity extends Temboo_Choreography
{
    /**
     * Edit a newsletter identity.
     *
     * @param Temboo_Session $session The session that owns this EditIdentity choreography.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Identity/EditIdentity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditIdentity choreography.
     *
     * @param SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Identity_EditIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Address input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Specify a new physical address to be used for this Identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter the new city for this Identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter a new country to be associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Email input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter an email address to be used for this identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Identity input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter an identity that is to be edited.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Name input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter the new name to be associated with this identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the NewIdentity input for this EditIdentity choreography.
     *
     * @param string $value (optional, string) Enter a new name for this identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setNewIdentity($value)
    {
        return $this->set('NewIdentity', $value);
    }

    /**
     * Set the value for the ReplyTo input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter an email address to be used in the Reply-To field.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setReplyTo($value)
    {
        return $this->set('ReplyTo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditIdentity choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this EditIdentity choreography.
     *
     * @param string $value (required, string) Enter the state to be associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this EditIdentity choreography.
     *
     * @param int $value (required, integer) Enter a new zip code associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }

}


/**
 * Execution object for the EditIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_EditIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditIdentity choreography.
     *
     * @param Temboo_Session $session The session that owns this EditIdentity execution.
     * @param SendGrid_NewsletterAPI_Identity_EditIdentity $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_EditIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Identity_EditIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditIdentity execution.
     *
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Results New results object.
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
     * Wraps results in appopriate results class for this EditIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Identity_EditIdentity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_EditIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditIdentity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_EditIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditIdentity execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update a SendGrid account profile.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateAccountProfile extends Temboo_Choreography
{
    /**
     * Update a SendGrid account profile.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountProfile choreography.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Profile/UpdateAccountProfile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateAccountProfile choreography.
     *
     * @param SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Profile_UpdateAccountProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateAccountProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateAccountProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateAccountProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateAccountProfile choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this UpdateAccountProfile choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Address input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter a company address.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter the city where this address is located in.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the FirstName input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter a first name.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setFirstName($value)
    {
        return $this->set('FirstName', $value);
    }

    /**
     * Set the value for the LastName input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter a last name.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setLastName($value)
    {
        return $this->set('LastName', $value);
    }

    /**
     * Set the value for the Phone input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Provide a phone number, where you can be reached.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setPhone($value)
    {
        return $this->set('Phone', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter the state where this company is located in.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Website input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter your company's website.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setWebsite($value)
    {
        return $this->set('Website', $value);
    }

    /**
     * Set the value for the Zip input for this UpdateAccountProfile choreography.
     *
     * @param string $value (optional, string) Enter a the zipcode where this company is located.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }

}


/**
 * Execution object for the UpdateAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateAccountProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateAccountProfile choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateAccountProfile execution.
     * @param SendGrid_WebAPI_Profile_UpdateAccountProfile $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateAccountProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Profile_UpdateAccountProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateAccountProfile execution.
     *
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateAccountProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Profile_UpdateAccountProfile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateAccountProfile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateAccountProfile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateAccountProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateAccountProfile execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain settings for the specified app.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_GetAppSettings extends Temboo_Choreography
{
    /**
     * Obtain settings for the specified app.
     *
     * @param Temboo_Session $session The session that owns this GetAppSettings choreography.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/FilterCommands/GetAppSettings/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAppSettings choreography.
     *
     * @param SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_FilterCommands_GetAppSettings_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAppSettings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAppSettings choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAppSettings choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAppSettings input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAppSettings choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetAppSettings choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the AppName input for this GetAppSettings choreography.
     *
     * @param string $value (required, string) Enter the name of the app to be activated.  A list of available apps can be obtained by running the ListAvailableApps Choreo.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function setAppName($value)
    {
        return $this->set('AppName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAppSettings choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetAppSettings choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_GetAppSettings_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAppSettings choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAppSettings execution.
     * @param SendGrid_WebAPI_FilterCommands_GetAppSettings $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_GetAppSettings_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_FilterCommands_GetAppSettings $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAppSettings execution.
     *
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Results New results object.
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
     * Wraps results in appopriate results class for this GetAppSettings execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_FilterCommands_GetAppSettings_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAppSettings choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_GetAppSettings_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAppSettings choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_GetAppSettings_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAppSettings execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve contents of a specified newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent extends Temboo_Choreography
{
    /**
     * Retrieve contents of a specified newsletter.
     *
     * @param Temboo_Session $session The session that owns this GetNewsletterContent choreography.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Newsletter/GetNewsletterContent/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetNewsletterContent choreography.
     *
     * @param SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewsletterContent choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewsletterContent choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetNewsletterContent choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewsletterContent input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNewsletterContent choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetNewsletterContent choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this GetNewsletterContent choreography.
     *
     * @param string $value (required, string) Enter the name of the newsletter to be retrieved. It must be an existing newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNewsletterContent choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetNewsletterContent choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewsletterContent choreography.
     *
     * @param Temboo_Session $session The session that owns this GetNewsletterContent execution.
     * @param SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewsletterContent execution.
     *
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Results New results object.
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
     * Wraps results in appopriate results class for this GetNewsletterContent execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetNewsletterContent choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetNewsletterContent choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_GetNewsletterContent_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetNewsletterContent execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get the scheduled delivery time of a specified Newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime extends Temboo_Choreography
{
    /**
     * Get the scheduled delivery time of a specified Newsletter.
     *
     * @param Temboo_Session $session The session that owns this GetNewsletterScheduleTime choreography.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Schedule/GetNewsletterScheduleTime/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetNewsletterScheduleTime choreography.
     *
     * @param SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetNewsletterScheduleTime choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetNewsletterScheduleTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetNewsletterScheduleTime choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetNewsletterScheduleTime input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetNewsletterScheduleTime choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetNewsletterScheduleTime choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this GetNewsletterScheduleTime choreography.
     *
     * @param string $value (required, string) Enter the name of the newsletter for which delivery schedule information will be retrieved.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetNewsletterScheduleTime choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetNewsletterScheduleTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetNewsletterScheduleTime choreography.
     *
     * @param Temboo_Session $session The session that owns this GetNewsletterScheduleTime execution.
     * @param SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetNewsletterScheduleTime execution.
     *
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Results New results object.
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
     * Wraps results in appopriate results class for this GetNewsletterScheduleTime execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetNewsletterScheduleTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetNewsletterScheduleTime choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_GetNewsletterScheduleTime_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetNewsletterScheduleTime execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Allows you to send emails.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Mail_SendMail extends Temboo_Choreography
{
    /**
     * Allows you to send emails.
     *
     * @param Temboo_Session $session The session that owns this SendMail choreography.
     * @return SendGrid_WebAPI_Mail_SendMail New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Mail/SendMail/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SendMail choreography.
     *
     * @param SendGrid_WebAPI_Mail_SendMail_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Mail_SendMail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Mail_SendMail_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Mail_SendMail_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SendMail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Mail_SendMail_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Mail_SendMail_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SendMail choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SendMail input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the FileContents input for this SendMail choreography.
     *
     * @param string $value (optional, string) The Base64-encoded contents of the file you want to attach.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setFileContents($value)
    {
        return $this->set('FileContents', $value);
    }

    /**
     * Set the value for the APIKey input for this SendMail choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this SendMail choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the BCC input for this SendMail choreography.
     *
     * @param string $value (optional, string) Enter a BCC recipient.  Multiple recipients can also be passed in as an array of email addresses.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setBCC($value)
    {
        return $this->set('BCC', $value);
    }

    /**
     * Set the value for the Date input for this SendMail choreography.
     *
     * @param string $value (optional, string) Specify the date of your email in RFC 2822 format.  For example: Thu, 21 Dec 2000 16:01:07 +0200
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the FileName input for this SendMail choreography.
     *
     * @param string $value (optional, string) The name of the file you are attaching to your email.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setFileName($value)
    {
        return $this->set('FileName', $value);
    }

    /**
     * Set the value for the FromName input for this SendMail choreography.
     *
     * @param string $value (optional, string) Enter a name to be appended to the from email.  For example, your company name, or your name.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setFromName($value)
    {
        return $this->set('FromName', $value);
    }

    /**
     * Set the value for the From input for this SendMail choreography.
     *
     * @param string $value (required, string) Specfiy the originating email address.  Must be from your domain.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setFrom($value)
    {
        return $this->set('From', $value);
    }

    /**
     * Set the value for the HTML input for this SendMail choreography.
     *
     * @param string $value (conditional, string) The HTML to be used in the body of your email message. Required unless specifying a plain text body in the Text input.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setHTML($value)
    {
        return $this->set('HTML', $value);
    }

    /**
     * Set the value for the Headers input for this SendMail choreography.
     *
     * @param string $value (optional, json) Specify collection of key/value pairs in JSON format. Each key represents a header name and the value the header value. For example: {"X-Accept-Language": "en", "X-Mailer": "MyApp"}
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setHeaders($value)
    {
        return $this->set('Headers', $value);
    }

    /**
     * Set the value for the ReplyTo input for this SendMail choreography.
     *
     * @param string $value (optional, string) Enter an email address to append to the reply-to field of your email.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setReplyTo($value)
    {
        return $this->set('ReplyTo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SendMail choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Subject input for this SendMail choreography.
     *
     * @param string $value (required, string) Enter the subject of the email message.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Text input for this SendMail choreography.
     *
     * @param string $value (conditional, string) The text of the email message. Required unless providing the message body using the HTML input.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

    /**
     * Set the value for the ToName input for this SendMail choreography.
     *
     * @param string $value (optional, string) Enter the name of the email recipient.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setToName($value)
    {
        return $this->set('ToName', $value);
    }

    /**
     * Set the value for the To input for this SendMail choreography.
     *
     * @param string $value (required, string) Enter a valid recipient email address.  Multiple addresses can be entered as elements of an array.
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setTo($value)
    {
        return $this->set('To', $value);
    }

    /**
     * Set the value for the XSMTPAPI input for this SendMail choreography.
     *
     * @param string $value (optional, json) Must be specified in valid JSON format.  See here for additional info: http://docs.sendgrid.com/documentation/api/smtp-api/
     * @return SendGrid_WebAPI_Mail_SendMail_Inputs For method chaining.
     */
    public function setXSMTPAPI($value)
    {
        return $this->set('XSMTPAPI', $value);
    }

}


/**
 * Execution object for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Mail_SendMail_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SendMail choreography.
     *
     * @param Temboo_Session $session The session that owns this SendMail execution.
     * @param SendGrid_WebAPI_Mail_SendMail $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Mail_SendMail_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Mail_SendMail_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Mail_SendMail_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Mail_SendMail $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SendMail execution.
     *
     * @return SendGrid_WebAPI_Mail_SendMail_Results New results object.
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
     * Wraps results in appopriate results class for this SendMail execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Mail_SendMail_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Mail_SendMail_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SendMail choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Mail_SendMail_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SendMail choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Mail_SendMail_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SendMail execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Sets up a previously activated app.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_SetupApp extends Temboo_Choreography
{
    /**
     * Sets up a previously activated app.
     *
     * @param Temboo_Session $session The session that owns this SetupApp choreography.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/FilterCommands/SetupApp/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this SetupApp choreography.
     *
     * @param SendGrid_WebAPI_FilterCommands_SetupApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_SetupApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_FilterCommands_SetupApp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this SetupApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_FilterCommands_SetupApp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the SetupApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_SetupApp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the SetupApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this SetupApp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this SetupApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this SetupApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the AppName input for this SetupApp choreography.
     *
     * @param string $value (required, string) Enter the name of the app to be activated.  A list of available apps can be obtained by running the ListAvailableApps Choreo.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setAppName($value)
    {
        return $this->set('AppName', $value);
    }

    /**
     * Set the value for the Password input for this SetupApp choreography.
     *
     * @param string $value (required, string) Enter the password for the app that is being setup.  For example, if setting up a Twitter app, enter a valid Twitter account password.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this SetupApp choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Username input for this SetupApp choreography.
     *
     * @param string $value (required, string) Enter the username for the app that is being setup. For example, if setting up a Twitter app, enter a valid Twitter account username.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Inputs For method chaining.
     */
    public function setUsername($value)
    {
        return $this->set('Username', $value);
    }

}


/**
 * Execution object for the SetupApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_SetupApp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the SetupApp choreography.
     *
     * @param Temboo_Session $session The session that owns this SetupApp execution.
     * @param SendGrid_WebAPI_FilterCommands_SetupApp $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_FilterCommands_SetupApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_SetupApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_FilterCommands_SetupApp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this SetupApp execution.
     *
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Results New results object.
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
     * Wraps results in appopriate results class for this SetupApp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_FilterCommands_SetupApp_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the SetupApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_SetupApp_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the SetupApp choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_SetupApp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this SetupApp execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Schedule a delivery time for an existing Newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery extends Temboo_Choreography
{
    /**
     * Schedule a delivery time for an existing Newsletter.
     *
     * @param Temboo_Session $session The session that owns this ScheduleNewsletterDelivery choreography.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Schedule/ScheduleNewsletterDelivery/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ScheduleNewsletterDelivery choreography.
     *
     * @param SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ScheduleNewsletterDelivery choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ScheduleNewsletterDelivery choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ScheduleNewsletterDelivery choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ScheduleNewsletterDelivery input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ScheduleNewsletterDelivery choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ScheduleNewsletterDelivery choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the After input for this ScheduleNewsletterDelivery choreography.
     *
     * @param int $value (optional, integer) Enter the number of minites after which the newsletter will be delivered.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setAfter($value)
    {
        return $this->set('After', $value);
    }

    /**
     * Set the value for the At input for this ScheduleNewsletterDelivery choreography.
     *
     * @param string $value (optional, string) Specify the date and time when the newsletter is to be delievered, in ISO 8601 format (YYYY-MM-DD HH:MM:SS+-HH:MM)
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setAt($value)
    {
        return $this->set('At', $value);
    }

    /**
     * Set the value for the Name input for this ScheduleNewsletterDelivery choreography.
     *
     * @param string $value (required, string) Enter the name of the newsletter that is being scheduled for delivery.  If the newsletter is to be sent immediately, then leave the At, and After parameters empty.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ScheduleNewsletterDelivery choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ScheduleNewsletterDelivery choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ScheduleNewsletterDelivery choreography.
     *
     * @param Temboo_Session $session The session that owns this ScheduleNewsletterDelivery execution.
     * @param SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ScheduleNewsletterDelivery execution.
     *
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Results New results object.
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
     * Wraps results in appopriate results class for this ScheduleNewsletterDelivery execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ScheduleNewsletterDelivery choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ScheduleNewsletterDelivery choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_ScheduleNewsletterDelivery_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ScheduleNewsletterDelivery execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an email address from the spam reports list.

 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_DeleteEmailAddress extends Temboo_Choreography
{
    /**
     * Delete an email address from the spam reports list.

     *
     * @param Temboo_Session $session The session that owns this DeleteEmailAddress choreography.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/SpamReports/DeleteEmailAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteEmailAddress choreography.
     *
     * @param SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteEmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEmailAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteEmailAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteEmailAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Email input for this DeleteEmailAddress choreography.
     *
     * @param string $value (optional, string) Enter a specific email address to be deleted from the spam report list.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteEmailAddress choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEmailAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteEmailAddress execution.
     * @param SendGrid_WebAPI_SpamReports_DeleteEmailAddress $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_SpamReports_DeleteEmailAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEmailAddress execution.
     *
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteEmailAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteEmailAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_SpamReports_DeleteEmailAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteEmailAddress execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an address from the bounced email list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_DeleteBouncedAddress extends Temboo_Choreography
{
    /**
     * Delete an address from the bounced email list.
     *
     * @param Temboo_Session $session The session that owns this DeleteBouncedAddress choreography.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Bounces/DeleteBouncedAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteBouncedAddress choreography.
     *
     * @param SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBouncedAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBouncedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteBouncedAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBouncedAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the EmailAddress input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (optional, string) Enter a valid email address to be deleted from your block list.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the EndDate input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Type input for this DeleteBouncedAddress choreography.
     *
     * @param string $value (optional, string) Choose the type of bounce to search for. Enter: hard, or soft.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

}


/**
 * Execution object for the DeleteBouncedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBouncedAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteBouncedAddress execution.
     * @param SendGrid_WebAPI_Bounces_DeleteBouncedAddress $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Bounces_DeleteBouncedAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBouncedAddress execution.
     *
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteBouncedAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteBouncedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteBouncedAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Bounces_DeleteBouncedAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteBouncedAddress execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Edit an existing newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_EditNewsletter extends Temboo_Choreography
{
    /**
     * Edit an existing newsletter.
     *
     * @param Temboo_Session $session The session that owns this EditNewsletter choreography.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Newsletter/EditNewsletter/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this EditNewsletter choreography.
     *
     * @param SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this EditNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the EditNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the EditNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this EditNewsletter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the HTML input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter the html portion of the newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setHTML($value)
    {
        return $this->set('HTML', $value);
    }

    /**
     * Set the value for the Identity input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter the new identity Identiy for the newsletter that is being edited.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Name input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter the name of the newsletter that is being edited.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the NewName input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter the new name of the newsletter that is being edited.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setNewName($value)
    {
        return $this->set('NewName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this EditNewsletter choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Subject input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Provide the new subject for the edited newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Text input for this EditNewsletter choreography.
     *
     * @param string $value (required, string) Enter the text portion of the newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

}


/**
 * Execution object for the EditNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the EditNewsletter choreography.
     *
     * @param Temboo_Session $session The session that owns this EditNewsletter execution.
     * @param SendGrid_NewsletterAPI_Newsletter_EditNewsletter $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Newsletter_EditNewsletter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this EditNewsletter execution.
     *
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Results New results object.
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
     * Wraps results in appopriate results class for this EditNewsletter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the EditNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the EditNewsletter choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_EditNewsletter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this EditNewsletter execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Deactivate an app.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_DeactivateApp extends Temboo_Choreography
{
    /**
     * Deactivate an app.
     *
     * @param Temboo_Session $session The session that owns this DeactivateApp choreography.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/FilterCommands/DeactivateApp/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeactivateApp choreography.
     *
     * @param SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_FilterCommands_DeactivateApp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeactivateApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeactivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeactivateApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeactivateApp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeactivateApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeactivateApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the AppName input for this DeactivateApp choreography.
     *
     * @param string $value (required, string) Enter the name of the app to be activated.  A list of available apps can be obtained by running the ListAvailableApps Choreo.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function setAppName($value)
    {
        return $this->set('AppName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeactivateApp choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeactivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_DeactivateApp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeactivateApp choreography.
     *
     * @param Temboo_Session $session The session that owns this DeactivateApp execution.
     * @param SendGrid_WebAPI_FilterCommands_DeactivateApp $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_DeactivateApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_FilterCommands_DeactivateApp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeactivateApp execution.
     *
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Results New results object.
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
     * Wraps results in appopriate results class for this DeactivateApp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_FilterCommands_DeactivateApp_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeactivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_DeactivateApp_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeactivateApp choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_DeactivateApp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeactivateApp execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Activate an app.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ActivateApp extends Temboo_Choreography
{
    /**
     * Activate an app.
     *
     * @param Temboo_Session $session The session that owns this ActivateApp choreography.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/FilterCommands/ActivateApp/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ActivateApp choreography.
     *
     * @param SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_FilterCommands_ActivateApp_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ActivateApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ActivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ActivateApp choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ActivateApp input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ActivateApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ActivateApp choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the AppName input for this ActivateApp choreography.
     *
     * @param string $value (required, string) Enter the name of the app to be activated.  A list of available apps can be obtained by running the ListAvailableApps Choreo.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function setAppName($value)
    {
        return $this->set('AppName', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ActivateApp choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ActivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ActivateApp_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ActivateApp choreography.
     *
     * @param Temboo_Session $session The session that owns this ActivateApp execution.
     * @param SendGrid_WebAPI_FilterCommands_ActivateApp $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_ActivateApp_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_FilterCommands_ActivateApp $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ActivateApp execution.
     *
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Results New results object.
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
     * Wraps results in appopriate results class for this ActivateApp execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_FilterCommands_ActivateApp_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ActivateApp choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ActivateApp_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ActivateApp choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_ActivateApp_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ActivateApp execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an address from the blocked email list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_DeleteBlockedAddress extends Temboo_Choreography
{
    /**
     * Delete an address from the blocked email list.
     *
     * @param Temboo_Session $session The session that owns this DeleteBlockedAddress choreography.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Blocks/DeleteBlockedAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteBlockedAddress choreography.
     *
     * @param SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteBlockedAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteBlockedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteBlockedAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteBlockedAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteBlockedAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteBlockedAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the EmailAddress input for this DeleteBlockedAddress choreography.
     *
     * @param string $value (required, string) Enter a valid email address to be deleted from your block list.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function setEmailAddress($value)
    {
        return $this->set('EmailAddress', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteBlockedAddress choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteBlockedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteBlockedAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteBlockedAddress execution.
     * @param SendGrid_WebAPI_Blocks_DeleteBlockedAddress $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Blocks_DeleteBlockedAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteBlockedAddress execution.
     *
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteBlockedAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteBlockedAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteBlockedAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Blocks_DeleteBlockedAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteBlockedAddress execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Reset a SendGrid account password.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ResetPassword extends Temboo_Choreography
{
    /**
     * Reset a SendGrid account password.
     *
     * @param Temboo_Session $session The session that owns this ResetPassword choreography.
     * @return SendGrid_WebAPI_Profile_ResetPassword New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Profile/ResetPassword/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ResetPassword choreography.
     *
     * @param SendGrid_WebAPI_Profile_ResetPassword_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_ResetPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Profile_ResetPassword_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ResetPassword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Profile_ResetPassword_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ResetPassword choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ResetPassword_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ResetPassword choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ResetPassword input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ResetPassword choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ResetPassword choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the ConfirmPassword input for this ResetPassword choreography.
     *
     * @param string $value (required, string) Re-enter the new account password.  Must match the string entered in the Password variable.  Minumum password length is 6 characters.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setConfirmPassword($value)
    {
        return $this->set('ConfirmPassword', $value);
    }

    /**
     * Set the value for the Password input for this ResetPassword choreography.
     *
     * @param string $value (required, string) Enter a new account password of 6 characters or more.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setPassword($value)
    {
        return $this->set('Password', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ResetPassword choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ResetPassword choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ResetPassword_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ResetPassword choreography.
     *
     * @param Temboo_Session $session The session that owns this ResetPassword execution.
     * @param SendGrid_WebAPI_Profile_ResetPassword $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Profile_ResetPassword_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_ResetPassword_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Profile_ResetPassword $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ResetPassword execution.
     *
     * @return SendGrid_WebAPI_Profile_ResetPassword_Results New results object.
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
     * Wraps results in appopriate results class for this ResetPassword execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Profile_ResetPassword_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ResetPassword choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ResetPassword_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ResetPassword choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_ResetPassword_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ResetPassword execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain statistics by specified categories.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals extends Temboo_Choreography
{
    /**
     * Obtain statistics by specified categories.
     *
     * @param Temboo_Session $session The session that owns this GetAllTimeCategoryTotals choreography.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Statistics/GetAllTimeCategoryTotals/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllTimeCategoryTotals choreography.
     *
     * @param SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllTimeCategoryTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllTimeCategoryTotals choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllTimeCategoryTotals choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllTimeCategoryTotals input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAllTimeCategoryTotals choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetAllTimeCategoryTotals choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Aggregate input for this GetAllTimeCategoryTotals choreography.
     *
     * @param int $value (required, integer) Must be set to 1 to retrieve category statistics.  Default is set to 1.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setAggregate($value)
    {
        return $this->set('Aggregate', $value);
    }

    /**
     * Set the value for the Category input for this GetAllTimeCategoryTotals choreography.
     *
     * @param string $value (required, string) Enter a category for which statistics will be retrieved. It must be an existing category that has statistics. If the category entered does not exist, an empty result set will be returned.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Days input for this GetAllTimeCategoryTotals choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved. Note that you can use either the days parameter or the start_date and end_date parameter.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAllTimeCategoryTotals choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetAllTimeCategoryTotals choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value. Use this ,or Days.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the GetAllTimeCategoryTotals choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllTimeCategoryTotals choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllTimeCategoryTotals execution.
     * @param SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllTimeCategoryTotals execution.
     *
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllTimeCategoryTotals execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllTimeCategoryTotals choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllTimeCategoryTotals choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_GetAllTimeCategoryTotals_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllTimeCategoryTotals execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of Unsubscribes with addresses and dates. 
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList extends Temboo_Choreography
{
    /**
     * Get a list of Unsubscribes with addresses and dates. 
     *
     * @param Temboo_Session $session The session that owns this GetUnsubscribesList choreography.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Unsubscribes/GetUnsubscribesList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetUnsubscribesList choreography.
     *
     * @param SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetUnsubscribesList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Date input for this GetUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Enter: 1, to obtain the timestamp of the unsubscribe records. Dates will be returned in a MySQL timestamp format - YYYY-MM-DD HH:MM:SS
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Days input for this GetUnsubscribesList choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved. Note that you can use either the days parameter or the start_date and end_date parameter.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the Email input for this GetUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Enter a specific email address to search for.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this GetUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Limit input for this GetUnsubscribesList choreography.
     *
     * @param int $value (optional, integer) Enter a number to limit the number of results returned.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetUnsubscribesList choreography.
     *
     * @param int $value (optional, integer) Specify the beginning point in the list to retrieve bounces from.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value. Use this ,or Days.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the GetUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetUnsubscribesList choreography.
     *
     * @param Temboo_Session $session The session that owns this GetUnsubscribesList execution.
     * @param SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetUnsubscribesList execution.
     *
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Results New results object.
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
     * Wraps results in appopriate results class for this GetUnsubscribesList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetUnsubscribesList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_GetUnsubscribesList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetUnsubscribesList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update an account username.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress extends Temboo_Choreography
{
    /**
     * Update an account username.
     *
     * @param Temboo_Session $session The session that owns this UpdateContactProfileEmailAddress choreography.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Profile/UpdateContactProfileEmailAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateContactProfileEmailAddress choreography.
     *
     * @param SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateContactProfileEmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateContactProfileEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateContactProfileEmailAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateContactProfileEmailAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateContactProfileEmailAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this UpdateContactProfileEmailAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the NewEmailAddress input for this UpdateContactProfileEmailAddress choreography.
     *
     * @param string $value (required, string) Enter a valid email address, not exceeding 100 characters. This address will be used for all future communication with SendGrid. A confirmation email will be sent to validate the change of address.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function setNewEmailAddress($value)
    {
        return $this->set('NewEmailAddress', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateContactProfileEmailAddress choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the UpdateContactProfileEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateContactProfileEmailAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateContactProfileEmailAddress execution.
     * @param SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateContactProfileEmailAddress execution.
     *
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateContactProfileEmailAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateContactProfileEmailAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateContactProfileEmailAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateContactProfileEmailAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateContactProfileEmailAddress execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of all the categories used in a SendGrid account.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_ListAllCategories extends Temboo_Choreography
{
    /**
     * Retrieve a list of all the categories used in a SendGrid account.
     *
     * @param Temboo_Session $session The session that owns this ListAllCategories choreography.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Statistics/ListAllCategories/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllCategories choreography.
     *
     * @param SendGrid_WebAPI_Statistics_ListAllCategories_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_ListAllCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Statistics_ListAllCategories_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllCategories choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Statistics_ListAllCategories_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllCategories choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_ListAllCategories_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllCategories choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllCategories input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllCategories choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ListAllCategories choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllCategories choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ListAllCategories choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_ListAllCategories_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllCategories choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllCategories execution.
     * @param SendGrid_WebAPI_Statistics_ListAllCategories $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Statistics_ListAllCategories_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_ListAllCategories_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Statistics_ListAllCategories $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllCategories execution.
     *
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllCategories execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Statistics_ListAllCategories_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllCategories choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_ListAllCategories_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllCategories choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_ListAllCategories_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllCategories execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete Recipient Lists from a Newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter extends Temboo_Choreography
{
    /**
     * Delete Recipient Lists from a Newsletter.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecipientListFromNewsletter choreography.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Recipients/DeleteRecipientListFromNewsletter/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecipientListFromNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteRecipientListFromNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecipientListFromNewsletter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the List input for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param string $value (required, string) Enter the Recipient List to remove.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the Name input for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param string $value (required, string) Enter the name of an existing newsletter, to remove recipient lists from.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteRecipientListFromNewsletter choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteRecipientListFromNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecipientListFromNewsletter choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecipientListFromNewsletter execution.
     * @param SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecipientListFromNewsletter execution.
     *
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteRecipientListFromNewsletter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteRecipientListFromNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteRecipientListFromNewsletter choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_DeleteRecipientListFromNewsletter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteRecipientListFromNewsletter execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve information about a specified Identity.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_GetIdentityInfo extends Temboo_Choreography
{
    /**
     * Retrieve information about a specified Identity.
     *
     * @param Temboo_Session $session The session that owns this GetIdentityInfo choreography.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Identity/GetIdentityInfo/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetIdentityInfo choreography.
     *
     * @param SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetIdentityInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetIdentityInfo choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetIdentityInfo choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetIdentityInfo input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetIdentityInfo choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetIdentityInfo choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Identity input for this GetIdentityInfo choreography.
     *
     * @param string $value (required, string) Enter an identity for which info will be retrieved.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetIdentityInfo choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetIdentityInfo choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetIdentityInfo choreography.
     *
     * @param Temboo_Session $session The session that owns this GetIdentityInfo execution.
     * @param SendGrid_NewsletterAPI_Identity_GetIdentityInfo $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Identity_GetIdentityInfo $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetIdentityInfo execution.
     *
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Results New results object.
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
     * Wraps results in appopriate results class for this GetIdentityInfo execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetIdentityInfo choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetIdentityInfo choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_GetIdentityInfo_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetIdentityInfo execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve Recipient Lists attached to a specified newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists extends Temboo_Choreography
{
    /**
     * Retrieve Recipient Lists attached to a specified newsletter.
     *
     * @param Temboo_Session $session The session that owns this GetAttachedRecipientLists choreography.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Recipients/GetAttachedRecipientLists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAttachedRecipientLists choreography.
     *
     * @param SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAttachedRecipientLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAttachedRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAttachedRecipientLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAttachedRecipientLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAttachedRecipientLists choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetAttachedRecipientLists choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this GetAttachedRecipientLists choreography.
     *
     * @param string $value (required, string) Enter the name of an existing newsletter, whose recipient lists will be obtained.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAttachedRecipientLists choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetAttachedRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAttachedRecipientLists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAttachedRecipientLists execution.
     * @param SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAttachedRecipientLists execution.
     *
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Results New results object.
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
     * Wraps results in appopriate results class for this GetAttachedRecipientLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAttachedRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAttachedRecipientLists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_GetAttachedRecipientLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAttachedRecipientLists execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of bounced emails, with response codes, and optional dates.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_GetBounces extends Temboo_Choreography
{
    /**
     * Retrieve a list of bounced emails, with response codes, and optional dates.
     *
     * @param Temboo_Session $session The session that owns this GetBounces choreography.
     * @return SendGrid_WebAPI_Bounces_GetBounces New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Bounces/GetBounces/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBounces choreography.
     *
     * @param SendGrid_WebAPI_Bounces_GetBounces_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Bounces_GetBounces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Bounces_GetBounces_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBounces choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Bounces_GetBounces_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBounces choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_GetBounces_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBounces choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBounces input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBounces choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetBounces choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Date input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Enter: 1, to obtain the timestamp of the Block records. Dates will be returned in a MySQL timestamp format - YYYY-MM-DD HH:MM:SS
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Days input for this GetBounces choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the Email input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Enter an email to search for.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Limit input for this GetBounces choreography.
     *
     * @param int $value (optional, integer) Enter a number to limit the number of results returned.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetBounces choreography.
     *
     * @param int $value (optional, integer) Specify the beginning point in the list to retrieve bounces from.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

    /**
     * Set the value for the Type input for this GetBounces choreography.
     *
     * @param string $value (optional, string) Choose the type of bounce to search for. Enter: hard, or soft.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Inputs For method chaining.
     */
    public function setType($value)
    {
        return $this->set('Type', $value);
    }

}


/**
 * Execution object for the GetBounces choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_GetBounces_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBounces choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBounces execution.
     * @param SendGrid_WebAPI_Bounces_GetBounces $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Bounces_GetBounces_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Bounces_GetBounces_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Bounces_GetBounces $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBounces execution.
     *
     * @return SendGrid_WebAPI_Bounces_GetBounces_Results New results object.
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
     * Wraps results in appopriate results class for this GetBounces execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Bounces_GetBounces_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBounces choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Bounces_GetBounces_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBounces choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Bounces_GetBounces_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBounces execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Get a list of all newsletters in this account.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters extends Temboo_Choreography
{
    /**
     * Get a list of all newsletters in this account.
     *
     * @param Temboo_Session $session The session that owns this ListAllNewsletters choreography.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Newsletter/ListAllNewsletters/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllNewsletters choreography.
     *
     * @param SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllNewsletters choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllNewsletters choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllNewsletters choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllNewsletters input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllNewsletters choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ListAllNewsletters choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this ListAllNewsletters choreography.
     *
     * @param string $value (optional, string) Enter the name of a specific newsletter to be retrieved. It must be an existing newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllNewsletters choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ListAllNewsletters choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllNewsletters choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllNewsletters execution.
     * @param SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllNewsletters execution.
     *
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllNewsletters execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllNewsletters choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllNewsletters choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_ListAllNewsletters_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllNewsletters execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add one or more recipient lists to a newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_AddRecipientList extends Temboo_Choreography
{
    /**
     * Add one or more recipient lists to a newsletter.
     *
     * @param Temboo_Session $session The session that owns this AddRecipientList choreography.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Recipients/AddRecipientList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddRecipientList choreography.
     *
     * @param SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Recipients_AddRecipientList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddRecipientList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this AddRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the List input for this AddRecipientList choreography.
     *
     * @param string $value (required, string) Provide the recipient list to be added to the specified newsletter.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the Name input for this AddRecipientList choreography.
     *
     * @param string $value (required, string) Enter the name of an existing newsletter to which a recipient list is being added.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddRecipientList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the AddRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_AddRecipientList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddRecipientList choreography.
     *
     * @param Temboo_Session $session The session that owns this AddRecipientList execution.
     * @param SendGrid_NewsletterAPI_Recipients_AddRecipientList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Recipients_AddRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Recipients_AddRecipientList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddRecipientList execution.
     *
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Results New results object.
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
     * Wraps results in appopriate results class for this AddRecipientList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Recipients_AddRecipientList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Recipients_AddRecipientList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddRecipientList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Recipients_AddRecipientList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddRecipientList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve information about a specified Identity.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_ListAllIdentities extends Temboo_Choreography
{
    /**
     * Retrieve information about a specified Identity.
     *
     * @param Temboo_Session $session The session that owns this ListAllIdentities choreography.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Identity/ListAllIdentities/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAllIdentities choreography.
     *
     * @param SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Identity_ListAllIdentities_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAllIdentities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAllIdentities choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAllIdentities choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAllIdentities input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAllIdentities choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ListAllIdentities choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Identity input for this ListAllIdentities choreography.
     *
     * @param string $value (optional, string) Enter an identity for which info will be retrieved. Leave empty to list all Identities in this account.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAllIdentities choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ListAllIdentities choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_ListAllIdentities_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAllIdentities choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAllIdentities execution.
     * @param SendGrid_NewsletterAPI_Identity_ListAllIdentities $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_ListAllIdentities_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Identity_ListAllIdentities $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAllIdentities execution.
     *
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Results New results object.
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
     * Wraps results in appopriate results class for this ListAllIdentities execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Identity_ListAllIdentities_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAllIdentities choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_ListAllIdentities_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAllIdentities choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_ListAllIdentities_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAllIdentities execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a new identity.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_CreateIdentity extends Temboo_Choreography
{
    /**
     * Create a new identity.
     *
     * @param Temboo_Session $session The session that owns this CreateIdentity choreography.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Identity/CreateIdentity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateIdentity choreography.
     *
     * @param SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Identity_CreateIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Address input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Specify the physical address to be used for this Identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setAddress($value)
    {
        return $this->set('Address', $value);
    }

    /**
     * Set the value for the City input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter the city for this Identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setCity($value)
    {
        return $this->set('City', $value);
    }

    /**
     * Set the value for the Country input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter a country to be associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setCountry($value)
    {
        return $this->set('Country', $value);
    }

    /**
     * Set the value for the Email input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter an email address to be used for this identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the Identity input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter a name for this identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Name input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter the name to be associated with this identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ReplyTo input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter an email address to be used in the Reply-To field.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setReplyTo($value)
    {
        return $this->set('ReplyTo', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateIdentity choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the State input for this CreateIdentity choreography.
     *
     * @param string $value (required, string) Enter the state to be associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setState($value)
    {
        return $this->set('State', $value);
    }

    /**
     * Set the value for the Zip input for this CreateIdentity choreography.
     *
     * @param int $value (required, integer) Enter the zip code associated with this Identity.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs For method chaining.
     */
    public function setZip($value)
    {
        return $this->set('Zip', $value);
    }

}


/**
 * Execution object for the CreateIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_CreateIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateIdentity choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateIdentity execution.
     * @param SendGrid_NewsletterAPI_Identity_CreateIdentity $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_CreateIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Identity_CreateIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateIdentity execution.
     *
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Results New results object.
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
     * Wraps results in appopriate results class for this CreateIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Identity_CreateIdentity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_CreateIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateIdentity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_CreateIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateIdentity execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Display account profile information.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ViewAccountProfile extends Temboo_Choreography
{
    /**
     * Display account profile information.
     *
     * @param Temboo_Session $session The session that owns this ViewAccountProfile choreography.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Profile/ViewAccountProfile/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ViewAccountProfile choreography.
     *
     * @param SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Profile_ViewAccountProfile_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ViewAccountProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ViewAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ViewAccountProfile choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ViewAccountProfile input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ViewAccountProfile choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ViewAccountProfile choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ViewAccountProfile choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ViewAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ViewAccountProfile_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ViewAccountProfile choreography.
     *
     * @param Temboo_Session $session The session that owns this ViewAccountProfile execution.
     * @param SendGrid_WebAPI_Profile_ViewAccountProfile $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_ViewAccountProfile_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Profile_ViewAccountProfile $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ViewAccountProfile execution.
     *
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Results New results object.
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
     * Wraps results in appopriate results class for this ViewAccountProfile execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Profile_ViewAccountProfile_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ViewAccountProfile choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_ViewAccountProfile_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ViewAccountProfile choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_ViewAccountProfile_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ViewAccountProfile execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve email addresses associated with a specified Recipient List.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses extends Temboo_Choreography
{
    /**
     * Retrieve email addresses associated with a specified Recipient List.
     *
     * @param Temboo_Session $session The session that owns this GetListEmailAddresses choreography.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/ListsEmail/GetListEmailAddresses/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetListEmailAddresses choreography.
     *
     * @param SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetListEmailAddresses choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetListEmailAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetListEmailAddresses choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetListEmailAddresses input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetListEmailAddresses choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetListEmailAddresses choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Email input for this GetListEmailAddresses choreography.
     *
     * @param string $value (optional, string) Specify an email address to search for in a recipient list.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the List input for this GetListEmailAddresses choreography.
     *
     * @param string $value (required, string) Enter the recipient list from which email addresses will be retrieved.  Must be an existing recipient list.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetListEmailAddresses choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetListEmailAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetListEmailAddresses choreography.
     *
     * @param Temboo_Session $session The session that owns this GetListEmailAddresses execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetListEmailAddresses execution.
     *
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Results New results object.
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
     * Wraps results in appopriate results class for this GetListEmailAddresses execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetListEmailAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetListEmailAddresses choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_GetListEmailAddresses_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetListEmailAddresses execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain statistics by specified categories.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetCategoryStatistics extends Temboo_Choreography
{
    /**
     * Obtain statistics by specified categories.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryStatistics choreography.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Statistics/GetCategoryStatistics/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetCategoryStatistics choreography.
     *
     * @param SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Statistics_GetCategoryStatistics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetCategoryStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetCategoryStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetCategoryStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetCategoryStatistics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetCategoryStatistics choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetCategoryStatistics choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Category input for this GetCategoryStatistics choreography.
     *
     * @param string $value (required, string) Enter a category for which statistics will be retrieved. It must be an existing category that has statistics. If the category entered does not exist, an empty result set will be returned.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setCategory($value)
    {
        return $this->set('Category', $value);
    }

    /**
     * Set the value for the Days input for this GetCategoryStatistics choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved. Note that you can use either the days parameter or the start_date and end_date parameter.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the EndDate input for this GetCategoryStatistics choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetCategoryStatistics choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetCategoryStatistics choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value. Use this ,or Days.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the GetCategoryStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetCategoryStatistics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetCategoryStatistics choreography.
     *
     * @param Temboo_Session $session The session that owns this GetCategoryStatistics execution.
     * @param SendGrid_WebAPI_Statistics_GetCategoryStatistics $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_GetCategoryStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Statistics_GetCategoryStatistics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetCategoryStatistics execution.
     *
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Results New results object.
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
     * Wraps results in appopriate results class for this GetCategoryStatistics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Statistics_GetCategoryStatistics_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetCategoryStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_GetCategoryStatistics_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetCategoryStatistics choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_GetCategoryStatistics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetCategoryStatistics execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of blocked emails, with response codes, and optional dates.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_GetBlockedAddresses extends Temboo_Choreography
{
    /**
     * Retrieve a list of blocked emails, with response codes, and optional dates.
     *
     * @param Temboo_Session $session The session that owns this GetBlockedAddresses choreography.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Blocks/GetBlockedAddresses/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetBlockedAddresses choreography.
     *
     * @param SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Blocks_GetBlockedAddresses_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetBlockedAddresses choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetBlockedAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetBlockedAddresses choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetBlockedAddresses input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetBlockedAddresses choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetBlockedAddresses choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Date input for this GetBlockedAddresses choreography.
     *
     * @param string $value (optional, string) Enter: 1, to obtain the timestamp of the Block records. Dates will be returned in a MySQL timestamp format - YYYY-MM-DD HH:MM:SS
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Days input for this GetBlockedAddresses choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the EndDate input for this GetBlockedAddresses choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetBlockedAddresses choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetBlockedAddresses choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the GetBlockedAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_GetBlockedAddresses_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetBlockedAddresses choreography.
     *
     * @param Temboo_Session $session The session that owns this GetBlockedAddresses execution.
     * @param SendGrid_WebAPI_Blocks_GetBlockedAddresses $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Blocks_GetBlockedAddresses_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Blocks_GetBlockedAddresses $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetBlockedAddresses execution.
     *
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Results New results object.
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
     * Wraps results in appopriate results class for this GetBlockedAddresses execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Blocks_GetBlockedAddresses_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetBlockedAddresses choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Blocks_GetBlockedAddresses_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetBlockedAddresses choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Blocks_GetBlockedAddresses_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetBlockedAddresses execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an address from the Invalid Email list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress extends Temboo_Choreography
{
    /**
     * Delete an address from the Invalid Email list.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvalidAddress choreography.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/InvalidEmails/DeleteInvalidAddress/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteInvalidAddress choreography.
     *
     * @param SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteInvalidAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteInvalidAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteInvalidAddress choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteInvalidAddress input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteInvalidAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteInvalidAddress choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the EmailAddressToDelete input for this DeleteInvalidAddress choreography.
     *
     * @param string $value (required, string) Enter the email address that is to be deleted.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function setEmailAddressToDelete($value)
    {
        return $this->set('EmailAddressToDelete', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteInvalidAddress choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteInvalidAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteInvalidAddress choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteInvalidAddress execution.
     * @param SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteInvalidAddress execution.
     *
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteInvalidAddress execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteInvalidAddress choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteInvalidAddress choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_InvalidEmails_DeleteInvalidAddress_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteInvalidAddress execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve all Recipient Lists.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_GetAllRecipientLists extends Temboo_Choreography
{
    /**
     * Retrieve all Recipient Lists.
     *
     * @param Temboo_Session $session The session that owns this GetAllRecipientLists choreography.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Lists/GetAllRecipientLists/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetAllRecipientLists choreography.
     *
     * @param SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetAllRecipientLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetAllRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetAllRecipientLists choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetAllRecipientLists input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetAllRecipientLists choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetAllRecipientLists choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the List input for this GetAllRecipientLists choreography.
     *
     * @param string $value (optional, string) Enter the name of a Recipient List to be retrieved.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetAllRecipientLists choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the GetAllRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetAllRecipientLists choreography.
     *
     * @param Temboo_Session $session The session that owns this GetAllRecipientLists execution.
     * @param SendGrid_NewsletterAPI_Lists_GetAllRecipientLists $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Lists_GetAllRecipientLists $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetAllRecipientLists execution.
     *
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Results New results object.
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
     * Wraps results in appopriate results class for this GetAllRecipientLists execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetAllRecipientLists choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetAllRecipientLists choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_GetAllRecipientLists_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetAllRecipientLists execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an Identity.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_DeleteIdentity extends Temboo_Choreography
{
    /**
     * Delete an Identity.
     *
     * @param Temboo_Session $session The session that owns this DeleteIdentity choreography.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Identity/DeleteIdentity/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteIdentity choreography.
     *
     * @param SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Identity_DeleteIdentity_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteIdentity choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteIdentity input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the Response input for this DeleteIdentity choreography.
     *
     * @param mixed $value (required, any) The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setResponse($value)
    {
        return $this->set('Response', $value);
    }

    /**
     * Set the value for the APIKey input for this DeleteIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteIdentity choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Identity input for this DeleteIdentity choreography.
     *
     * @param string $value (required, string) Enter an identity to be removed from your account.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteIdentity choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_DeleteIdentity_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteIdentity choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteIdentity execution.
     * @param SendGrid_NewsletterAPI_Identity_DeleteIdentity $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Identity_DeleteIdentity_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Identity_DeleteIdentity $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteIdentity execution.
     *
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteIdentity execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Identity_DeleteIdentity_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteIdentity choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Identity_DeleteIdentity_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteIdentity choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Identity_DeleteIdentity_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }
}

/**
 * Retrieve all-time total usage statistics for your subusers
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveAggregates extends Temboo_Choreography
{
    /**
     * Retrieve all-time total usage statistics for your subusers
     *
     * @param Temboo_Session $session The session that owns this RetrieveAggregates choreography.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Statistics/RetrieveAggregates/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveAggregates choreography.
     *
     * @param SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Statistics_RetrieveAggregates_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveAggregates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveAggregates choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveAggregates choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveAggregates input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveAggregates choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this RetrieveAggregates choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Aggregate input for this RetrieveAggregates choreography.
     *
     * @param int $value (required, integer) Must be set to 1, to retrieve all time totals.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function setAggregate($value)
    {
        return $this->set('Aggregate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveAggregates choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the RetrieveAggregates choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveAggregates_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveAggregates choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveAggregates execution.
     * @param SendGrid_WebAPI_Statistics_RetrieveAggregates $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_RetrieveAggregates_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Statistics_RetrieveAggregates $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveAggregates execution.
     *
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveAggregates execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Statistics_RetrieveAggregates_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveAggregates choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveAggregates_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveAggregates choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveAggregates_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveAggregates execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an email address from a specified Recipient List.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList extends Temboo_Choreography
{
    /**
     * Delete an email address from a specified Recipient List.
     *
     * @param Temboo_Session $session The session that owns this DeleteEmailFromList choreography.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/ListsEmail/DeleteEmailFromList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteEmailFromList choreography.
     *
     * @param SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteEmailFromList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteEmailFromList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteEmailFromList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteEmailFromList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteEmailFromList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteEmailFromList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Email input for this DeleteEmailFromList choreography.
     *
     * @param string $value (required, string) Specify an email address to be removed from the recipient list.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the List input for this DeleteEmailFromList choreography.
     *
     * @param string $value (required, string) Enter the recipient list from which email addresses will be removed.  Must be an existing recipient list.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteEmailFromList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteEmailFromList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteEmailFromList choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteEmailFromList execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteEmailFromList execution.
     *
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteEmailFromList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteEmailFromList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteEmailFromList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_DeleteEmailFromList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteEmailFromList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * List all availalbe apps available through the SendGrid Web API.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ListAvailableApps extends Temboo_Choreography
{
    /**
     * List all availalbe apps available through the SendGrid Web API.
     *
     * @param Temboo_Session $session The session that owns this ListAvailableApps choreography.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/FilterCommands/ListAvailableApps/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this ListAvailableApps choreography.
     *
     * @param SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_FilterCommands_ListAvailableApps_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this ListAvailableApps choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the ListAvailableApps choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the ListAvailableApps choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this ListAvailableApps input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this ListAvailableApps choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this ListAvailableApps choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this ListAvailableApps choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the ListAvailableApps choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ListAvailableApps_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the ListAvailableApps choreography.
     *
     * @param Temboo_Session $session The session that owns this ListAvailableApps execution.
     * @param SendGrid_WebAPI_FilterCommands_ListAvailableApps $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_FilterCommands_ListAvailableApps_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_FilterCommands_ListAvailableApps $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this ListAvailableApps execution.
     *
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Results New results object.
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
     * Wraps results in appopriate results class for this ListAvailableApps execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_FilterCommands_ListAvailableApps_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the ListAvailableApps choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_FilterCommands_ListAvailableApps_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the ListAvailableApps choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_FilterCommands_ListAvailableApps_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this ListAvailableApps execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add an address to the Unsubscribe list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList extends Temboo_Choreography
{
    /**
     * Add an address to the Unsubscribe list.
     *
     * @param Temboo_Session $session The session that owns this AddAddressToUnsubscribesList choreography.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Unsubscribes/AddAddressToUnsubscribesList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddAddressToUnsubscribesList choreography.
     *
     * @param SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddAddressToUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddAddressToUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddAddressToUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddAddressToUnsubscribesList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddAddressToUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this AddAddressToUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Email input for this AddAddressToUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a valid email address to be added to the unsubscribed list.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddAddressToUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the AddAddressToUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddAddressToUnsubscribesList choreography.
     *
     * @param Temboo_Session $session The session that owns this AddAddressToUnsubscribesList execution.
     * @param SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddAddressToUnsubscribesList execution.
     *
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Results New results object.
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
     * Wraps results in appopriate results class for this AddAddressToUnsubscribesList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddAddressToUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddAddressToUnsubscribesList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_AddAddressToUnsubscribesList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddAddressToUnsubscribesList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete an address from the Unsubscribe list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList extends Temboo_Choreography
{
    /**
     * Delete an address from the Unsubscribe list.
     *
     * @param Temboo_Session $session The session that owns this DeleteFromUnsubscribesList choreography.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Unsubscribes/DeleteFromUnsubscribesList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteFromUnsubscribesList choreography.
     *
     * @param SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteFromUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteFromUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteFromUnsubscribesList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteFromUnsubscribesList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Email input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Enter an unsubscribed email address to be deleted from the list. If no parameters are provided, the ENTIRE list will be removed.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this DeleteFromUnsubscribesList choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value. Use this ,or Days.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the DeleteFromUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteFromUnsubscribesList choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteFromUnsubscribesList execution.
     * @param SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteFromUnsubscribesList execution.
     *
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteFromUnsubscribesList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteFromUnsubscribesList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteFromUnsubscribesList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Unsubscribes_DeleteFromUnsubscribesList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteFromUnsubscribesList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve usage statistics.

 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveStatistics extends Temboo_Choreography
{
    /**
     * Retrieve usage statistics.

     *
     * @param Temboo_Session $session The session that owns this RetrieveStatistics choreography.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Statistics/RetrieveStatistics/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveStatistics choreography.
     *
     * @param SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Statistics_RetrieveStatistics_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveStatistics choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveStatistics input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveStatistics choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this RetrieveStatistics choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Days input for this RetrieveStatistics choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the EndDate input for this RetrieveStatistics choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveStatistics choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this RetrieveStatistics choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the RetrieveStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveStatistics_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveStatistics choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveStatistics execution.
     * @param SendGrid_WebAPI_Statistics_RetrieveStatistics $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Statistics_RetrieveStatistics_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Statistics_RetrieveStatistics $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveStatistics execution.
     *
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveStatistics execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Statistics_RetrieveStatistics_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveStatistics choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Statistics_RetrieveStatistics_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveStatistics choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Statistics_RetrieveStatistics_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveStatistics execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Rename a recipient list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_RenameRecipientList extends Temboo_Choreography
{
    /**
     * Rename a recipient list.
     *
     * @param Temboo_Session $session The session that owns this RenameRecipientList choreography.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Lists/RenameRecipientList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RenameRecipientList choreography.
     *
     * @param SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Lists_RenameRecipientList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RenameRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RenameRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RenameRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RenameRecipientList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RenameRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this RenameRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the List input for this RenameRecipientList choreography.
     *
     * @param string $value (required, string) Enter the name of Recipient List that is to be renamed.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the NewList input for this RenameRecipientList choreography.
     *
     * @param string $value (required, string) Enter the new name of Recipient List that is to be renamed.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setNewList($value)
    {
        return $this->set('NewList', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RenameRecipientList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the RenameRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_RenameRecipientList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RenameRecipientList choreography.
     *
     * @param Temboo_Session $session The session that owns this RenameRecipientList execution.
     * @param SendGrid_NewsletterAPI_Lists_RenameRecipientList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_RenameRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Lists_RenameRecipientList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RenameRecipientList execution.
     *
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Results New results object.
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
     * Wraps results in appopriate results class for this RenameRecipientList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Lists_RenameRecipientList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RenameRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_RenameRecipientList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RenameRecipientList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_RenameRecipientList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RenameRecipientList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Add an email to an existing Recipient List.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_AddEmailToList extends Temboo_Choreography
{
    /**
     * Add an email to an existing Recipient List.
     *
     * @param Temboo_Session $session The session that owns this AddEmailToList choreography.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/ListsEmail/AddEmailToList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this AddEmailToList choreography.
     *
     * @param SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this AddEmailToList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the AddEmailToList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the AddEmailToList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this AddEmailToList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this AddEmailToList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this AddEmailToList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Data input for this AddEmailToList choreography.
     *
     * @param string $value (required, string) Provide a JSON string containing the name, email and additional fields to be added to the specified recipient lists.  Example: {"email":"address@example.com","name":"name","other_field":"value"}
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setData($value)
    {
        return $this->set('Data', $value);
    }

    /**
     * Set the value for the List input for this AddEmailToList choreography.
     *
     * @param string $value (required, string) Enter the recipient list to which emaill addresses are being added. The list must be already existing.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this AddEmailToList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the AddEmailToList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the AddEmailToList choreography.
     *
     * @param Temboo_Session $session The session that owns this AddEmailToList execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_AddEmailToList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_ListsEmail_AddEmailToList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this AddEmailToList execution.
     *
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Results New results object.
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
     * Wraps results in appopriate results class for this AddEmailToList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the AddEmailToList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the AddEmailToList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_ListsEmail_AddEmailToList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this AddEmailToList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Retrieve a list of invalid emails with addresses, response codes, and dates.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails extends Temboo_Choreography
{
    /**
     * Retrieve a list of invalid emails with addresses, response codes, and dates.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvalidEmails choreography.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/InvalidEmails/RetrieveInvalidEmails/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this RetrieveInvalidEmails choreography.
     *
     * @param SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this RetrieveInvalidEmails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the RetrieveInvalidEmails choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the RetrieveInvalidEmails choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this RetrieveInvalidEmails input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Date input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (optional, string) Enter: 1, to obtain the timestamp of the Block records. Dates will be returned in a MySQL timestamp format - YYYY-MM-DD HH:MM:SS
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Days input for this RetrieveInvalidEmails choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the Email input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (optional, string) Enter an email to search for.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Limit input for this RetrieveInvalidEmails choreography.
     *
     * @param int $value (optional, integer) Enter a number to limit the number of results returned.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this RetrieveInvalidEmails choreography.
     *
     * @param int $value (optional, integer) Specify the beginning point in the list to retrieve bounces from.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this RetrieveInvalidEmails choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the RetrieveInvalidEmails choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the RetrieveInvalidEmails choreography.
     *
     * @param Temboo_Session $session The session that owns this RetrieveInvalidEmails execution.
     * @param SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this RetrieveInvalidEmails execution.
     *
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Results New results object.
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
     * Wraps results in appopriate results class for this RetrieveInvalidEmails execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the RetrieveInvalidEmails choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the RetrieveInvalidEmails choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_InvalidEmails_RetrieveInvalidEmails_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this RetrieveInvalidEmails execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Remove a newsletter from the account.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter extends Temboo_Choreography
{
    /**
     * Remove a newsletter from the account.
     *
     * @param Temboo_Session $session The session that owns this DeleteNewsletter choreography.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Newsletter/DeleteNewsletter/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteNewsletter choreography.
     *
     * @param SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteNewsletter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this DeleteNewsletter choreography.
     *
     * @param string $value (required, string) Enter the name of a that is to be deleted.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteNewsletter choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteNewsletter choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteNewsletter execution.
     * @param SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteNewsletter execution.
     *
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteNewsletter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteNewsletter choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_DeleteNewsletter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteNewsletter execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Obtain a list of spam reports, with email addresses, response codes, and dates.

 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_GetSpamReports extends Temboo_Choreography
{
    /**
     * Obtain a list of spam reports, with email addresses, response codes, and dates.

     *
     * @param Temboo_Session $session The session that owns this GetSpamReports choreography.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/SpamReports/GetSpamReports/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this GetSpamReports choreography.
     *
     * @param SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_SpamReports_GetSpamReports_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this GetSpamReports choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the GetSpamReports choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the GetSpamReports choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this GetSpamReports input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this GetSpamReports choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this GetSpamReports choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Date input for this GetSpamReports choreography.
     *
     * @param string $value (optional, string) Enter: 1, to obtain the timestamp of the spam report. Dates will be returned in a MySQL timestamp format - YYYY-MM-DD HH:MM:SS
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setDate($value)
    {
        return $this->set('Date', $value);
    }

    /**
     * Set the value for the Days input for this GetSpamReports choreography.
     *
     * @param int $value (optional, integer) Enter the number of days (greater than 0) for which block data will be retrieved.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setDays($value)
    {
        return $this->set('Days', $value);
    }

    /**
     * Set the value for the Email input for this GetSpamReports choreography.
     *
     * @param string $value (optional, string) Enter a specific email address to search for.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setEmail($value)
    {
        return $this->set('Email', $value);
    }

    /**
     * Set the value for the EndDate input for this GetSpamReports choreography.
     *
     * @param string $value (optional, string) Specify the end of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setEndDate($value)
    {
        return $this->set('EndDate', $value);
    }

    /**
     * Set the value for the Limit input for this GetSpamReports choreography.
     *
     * @param int $value (optional, integer) Enter a number to limit the number of results returned.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setLimit($value)
    {
        return $this->set('Limit', $value);
    }

    /**
     * Set the value for the Offset input for this GetSpamReports choreography.
     *
     * @param int $value (optional, integer) Specify the beginning point in the list to retrieve bounces from.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setOffset($value)
    {
        return $this->set('Offset', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this GetSpamReports choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the StartDate input for this GetSpamReports choreography.
     *
     * @param string $value (optional, string) Specify the start of the date range for which blocks are to be retireved. The specified date must be in YYYY-MM-DD format, and must be earlier than the EndDate variable value.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs For method chaining.
     */
    public function setStartDate($value)
    {
        return $this->set('StartDate', $value);
    }

}


/**
 * Execution object for the GetSpamReports choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_GetSpamReports_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the GetSpamReports choreography.
     *
     * @param Temboo_Session $session The session that owns this GetSpamReports execution.
     * @param SendGrid_WebAPI_SpamReports_GetSpamReports $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_SpamReports_GetSpamReports_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_SpamReports_GetSpamReports $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this GetSpamReports execution.
     *
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Results New results object.
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
     * Wraps results in appopriate results class for this GetSpamReports execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_SpamReports_GetSpamReports_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the GetSpamReports choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_SpamReports_GetSpamReports_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the GetSpamReports choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_SpamReports_GetSpamReports_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this GetSpamReports execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a scheduled Newsletter delivery time.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime extends Temboo_Choreography
{
    /**
     * Delete a scheduled Newsletter delivery time.
     *
     * @param Temboo_Session $session The session that owns this DeleteScheduledDeliveryTime choreography.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Schedule/DeleteScheduledDeliveryTime/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteScheduledDeliveryTime choreography.
     *
     * @param SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteScheduledDeliveryTime choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteScheduledDeliveryTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteScheduledDeliveryTime choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteScheduledDeliveryTime input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteScheduledDeliveryTime choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteScheduledDeliveryTime choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the Name input for this DeleteScheduledDeliveryTime choreography.
     *
     * @param string $value (required, string) Enter the name of the newsletter for which scheduled delievery will be removed.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteScheduledDeliveryTime choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteScheduledDeliveryTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteScheduledDeliveryTime choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteScheduledDeliveryTime execution.
     * @param SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteScheduledDeliveryTime execution.
     *
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteScheduledDeliveryTime execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteScheduledDeliveryTime choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteScheduledDeliveryTime choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Schedule_DeleteScheduledDeliveryTime_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteScheduledDeliveryTime execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Delete a Recipient List.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_DeleteRecipientList extends Temboo_Choreography
{
    /**
     * Delete a Recipient List.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecipientList choreography.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Lists/DeleteRecipientList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this DeleteRecipientList choreography.
     *
     * @param SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this DeleteRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the DeleteRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the DeleteRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this DeleteRecipientList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this DeleteRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this DeleteRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the List input for this DeleteRecipientList choreography.
     *
     * @param string $value (required, string) Enter the name of a Recipient List to be deleted from this account.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this DeleteRecipientList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the DeleteRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the DeleteRecipientList choreography.
     *
     * @param Temboo_Session $session The session that owns this DeleteRecipientList execution.
     * @param SendGrid_NewsletterAPI_Lists_DeleteRecipientList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Lists_DeleteRecipientList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this DeleteRecipientList execution.
     *
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Results New results object.
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
     * Wraps results in appopriate results class for this DeleteRecipientList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the DeleteRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the DeleteRecipientList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_DeleteRecipientList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this DeleteRecipientList execution.
     *
     * @return string (string) The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Update an account username.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateUsername extends Temboo_Choreography
{
    /**
     * Update an account username.
     *
     * @param Temboo_Session $session The session that owns this UpdateUsername choreography.
     * @return SendGrid_WebAPI_Profile_UpdateUsername New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/WebAPI/Profile/UpdateUsername/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this UpdateUsername choreography.
     *
     * @param SendGrid_WebAPI_Profile_UpdateUsername_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_WebAPI_Profile_UpdateUsername_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this UpdateUsername choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_WebAPI_Profile_UpdateUsername_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the UpdateUsername choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateUsername_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the UpdateUsername choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this UpdateUsername input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this UpdateUsername choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this UpdateUsername choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the NewUsername input for this UpdateUsername choreography.
     *
     * @param string $value (required, string) Enter a new username, to be used for authenticating on the SendGrid SMTP servers and website. Must not exceed 100 characters. The username cannot be already taken or contain the SendGrid.com domain
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function setNewUsername($value)
    {
        return $this->set('NewUsername', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this UpdateUsername choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the UpdateUsername choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateUsername_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the UpdateUsername choreography.
     *
     * @param Temboo_Session $session The session that owns this UpdateUsername execution.
     * @param SendGrid_WebAPI_Profile_UpdateUsername $choreo The choregraphy object for this execution.
     * @param SendGrid_WebAPI_Profile_UpdateUsername_Inputs|array $inputs (optional) Inputs as SendGrid_WebAPI_Profile_UpdateUsername_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_WebAPI_Profile_UpdateUsername $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this UpdateUsername execution.
     *
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Results New results object.
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
     * Wraps results in appopriate results class for this UpdateUsername execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_WebAPI_Profile_UpdateUsername_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the UpdateUsername choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_WebAPI_Profile_UpdateUsername_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the UpdateUsername choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_WebAPI_Profile_UpdateUsername_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this UpdateUsername execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a new newsletter.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_CreateNewsletter extends Temboo_Choreography
{
    /**
     * Create a new newsletter.
     *
     * @param Temboo_Session $session The session that owns this CreateNewsletter choreography.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Newsletter/CreateNewsletter/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateNewsletter choreography.
     *
     * @param SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateNewsletter choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateNewsletter input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the HTML input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter the html portion of the newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setHTML($value)
    {
        return $this->set('HTML', $value);
    }

    /**
     * Set the value for the Identity input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter the Identiy that will be used for the newsletter to be created.  This must be an existing Identity.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setIdentity($value)
    {
        return $this->set('Identity', $value);
    }

    /**
     * Set the value for the Name input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter the name of the new newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateNewsletter choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

    /**
     * Set the value for the Subject input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Provide the subject for the new newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setSubject($value)
    {
        return $this->set('Subject', $value);
    }

    /**
     * Set the value for the Text input for this CreateNewsletter choreography.
     *
     * @param string $value (required, string) Enter the text portion of the newsletter.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs For method chaining.
     */
    public function setText($value)
    {
        return $this->set('Text', $value);
    }

}


/**
 * Execution object for the CreateNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateNewsletter choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateNewsletter execution.
     * @param SendGrid_NewsletterAPI_Newsletter_CreateNewsletter $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Newsletter_CreateNewsletter $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateNewsletter execution.
     *
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Results New results object.
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
     * Wraps results in appopriate results class for this CreateNewsletter execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateNewsletter choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateNewsletter choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Newsletter_CreateNewsletter_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateNewsletter execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

/**
 * Create a new recipient list.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_CreateRecipientList extends Temboo_Choreography
{
    /**
     * Create a new recipient list.
     *
     * @param Temboo_Session $session The session that owns this CreateRecipientList choreography.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList New instance.
     */
    public function __construct(Temboo_Session $session)
    {
        parent::__construct($session, '/Library/SendGrid/NewsletterAPI/Lists/CreateRecipientList/');
    }

    /**
     * Executes this choreography.
     *
     * Execution object provides access to results appropriate for this CreateRecipientList choreography.
     *
     * @param SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Execution New execution object.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     * @throws Temboo_Exception if execution request fails.
     */
    public function execute($inputs = array(), $async = false, $store_results = true)
    {
        return new SendGrid_NewsletterAPI_Lists_CreateRecipientList_Execution($this->session, $this, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new inputs object.
     *
     * Includes setters appropriate for this CreateRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs New inputs object.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function newInputs($inputs = array())
    {
        return new SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs($inputs);
    }
}


/**
 * Inputs object with appropriate setters for the CreateRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs extends Temboo_Inputs
{
   /**
     * Inputs object with appopriate setters for the CreateRecipientList choreography.
     *
     * @param array $inputs (optional) Associative array of input names and values.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs New instance.
     * @throws Temboo_Exception if provided input set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($inputs = array())
    {
        parent::__construct($inputs);
    }

    /**
     * Set arbitrary input this CreateRecipientList input set.
     *
     * Input names are case sensitive.
     *
     * @param string $name Input name.
     * @param string $value Input value.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function set($name, $value)
    {
        return parent::set($name, $value);
    }

    /**
     * Set credential
     *
     * @param string $credentialName The name of a Credential in your account specifying presets for this set of inputs.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setCredential($credentialName)
    {
        return parent::setCredential($credentialName);
    }

    /**
     * Set the value for the APIKey input for this CreateRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid API Key.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setAPIKey($value)
    {
        return $this->set('APIKey', $value);
    }

    /**
     * Set the value for the APIUser input for this CreateRecipientList choreography.
     *
     * @param string $value (required, string) Enter a SendGrid username.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setAPIUser($value)
    {
        return $this->set('APIUser', $value);
    }

    /**
     * Set the value for the ColumnName input for this CreateRecipientList choreography.
     *
     * @param string $value (optional, string) Enter an additional column name.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setColumnName($value)
    {
        return $this->set('ColumnName', $value);
    }

    /**
     * Set the value for the List input for this CreateRecipientList choreography.
     *
     * @param string $value (required, string) Enter the name of the recipient list that is being created.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setList($value)
    {
        return $this->set('List', $value);
    }

    /**
     * Set the value for the Name input for this CreateRecipientList choreography.
     *
     * @param string $value (optional, string) Enter the column name to be associated with email addresses.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setName($value)
    {
        return $this->set('Name', $value);
    }

    /**
     * Set the value for the ResponseFormat input for this CreateRecipientList choreography.
     *
     * @param string $value (optional, string) Specify the format of the response from SendGrid: json, or xml.  Default is set to json.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs For method chaining.
     */
    public function setResponseFormat($value)
    {
        return $this->set('ResponseFormat', $value);
    }

}


/**
 * Execution object for the CreateRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_CreateRecipientList_Execution extends Temboo_Choreography_Execution
{
    /**
     * Execution object for the CreateRecipientList choreography.
     *
     * @param Temboo_Session $session The session that owns this CreateRecipientList execution.
     * @param SendGrid_NewsletterAPI_Lists_CreateRecipientList $choreo The choregraphy object for this execution.
     * @param SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs|array $inputs (optional) Inputs as SendGrid_NewsletterAPI_Lists_CreateRecipientList_Inputs or associative array.
     * @param bool $async Whether to execute in asynchronous mode. Default false.
     * @param bool $store_results Whether to store results of asynchronous execution. Default true.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Execution New execution.
     * @throws Temboo_Exception_Authentication if session authentication fails.
     * @throws Temboo_Exception_Execution if runtime errors occur in synchronous execution or execution fails to start. NOT thrown for post-launch errors in asynchronous execution -- check status or results to determine asynchronous success.
     * @throws Temboo_Exception_Notfound if choreography does not exist.
     */
    public function __construct(Temboo_Session $session, SendGrid_NewsletterAPI_Lists_CreateRecipientList $choreo, $inputs = array(), $async = false, $store_results = true)
    {
        parent::__construct($session, $choreo, $inputs, $async, $store_results);
    }

    /**
     * Obtains a new results object.
     *
     * Includes getters appropriate for this CreateRecipientList execution.
     *
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Results New results object.
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
     * Wraps results in appopriate results class for this CreateRecipientList execution.
     *
     * @param array $outputs Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Results New results object.
     */
    protected function wrapResults($outputs)
    {
        return new SendGrid_NewsletterAPI_Lists_CreateRecipientList_Results($outputs);
    }
}


/**
 * Results object with appopriate getters for the CreateRecipientList choreography.
 *
 * @package Temboo
 * @subpackage SendGrid
 */
class SendGrid_NewsletterAPI_Lists_CreateRecipientList_Results extends Temboo_Results
{
    /**
     * Results object with appopriate getters for the CreateRecipientList choreography.
     *
     * @param array $outputs (optional) Associative array of output names and values.
     * @return SendGrid_NewsletterAPI_Lists_CreateRecipientList_Results New instance.
     * @throws Temboo_Exception if provided output set is invalid. (Note an empty set is considered valid.)
     */
    public function __construct($outputs = array())
    {
        parent::__construct($outputs);
    }

    /**
     * Retrieve the value for the "Response" output from this CreateRecipientList execution.
     *
     * @return string The response from SendGrid. The format corresponds to the ResponseFormat input. Default is json.
     * @throws Temboo_Exception_Notfound if output does not exist. (Note an empty response is considered valid.)
     */
    public function getResponse()
    {
        return $this->get('Response');
    }
}

?>