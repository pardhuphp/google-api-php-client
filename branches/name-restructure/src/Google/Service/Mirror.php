<?php
/*
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

/**
 * Service definition for Mirror (v1).
 *
 * <p>
 * API for interacting with Glass users via the timeline.
 * </p>
 *
 * <p>
 * For more information about this service, see the
 * <a href="https://developers.google.com/glass" target="_blank">API Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Google_Service_Mirror extends Google_Service {
  public $contacts;
  public $locations;
  public $subscriptions;
  public $timeline;
  public $timeline_attachments;
  /**
   * Constructs the internal representation of the Mirror service.
   *
   * @param Google_Client $client
   */
  public function __construct(Google_Client $client) {
    $this->servicePath = 'mirror/v1/';
    $this->version = 'v1';
    $this->serviceName = 'mirror';

    $client->addService($this->serviceName, $this->version);
    $this->contacts = new Google_Service_Mirror_Contacts_Resource($this, $this->serviceName, 'contacts', json_decode('{"methods": {"delete": {"id": "mirror.contacts.delete", "path": "contacts/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.contacts.get", "path": "contacts/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Contact"}}, "insert": {"id": "mirror.contacts.insert", "path": "contacts", "httpMethod": "POST", "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}, "list": {"id": "mirror.contacts.list", "path": "contacts", "httpMethod": "GET", "response": {"$ref": "ContactsListResponse"}}, "patch": {"id": "mirror.contacts.patch", "path": "contacts/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}, "update": {"id": "mirror.contacts.update", "path": "contacts/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Contact"}, "response": {"$ref": "Contact"}}}}', true));
    $this->locations = new Google_Service_Mirror_Locations_Resource($this, $this->serviceName, 'locations', json_decode('{"methods": {"get": {"id": "mirror.locations.get", "path": "locations/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Location"}}, "list": {"id": "mirror.locations.list", "path": "locations", "httpMethod": "GET", "response": {"$ref": "LocationsListResponse"}}}}', true));
    $this->subscriptions = new Google_Service_Mirror_Subscriptions_Resource($this, $this->serviceName, 'subscriptions', json_decode('{"methods": {"delete": {"id": "mirror.subscriptions.delete", "path": "subscriptions/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "insert": {"id": "mirror.subscriptions.insert", "path": "subscriptions", "httpMethod": "POST", "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}, "list": {"id": "mirror.subscriptions.list", "path": "subscriptions", "httpMethod": "GET", "response": {"$ref": "SubscriptionsListResponse"}}, "update": {"id": "mirror.subscriptions.update", "path": "subscriptions/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "Subscription"}, "response": {"$ref": "Subscription"}}}}', true));
    $this->timeline = new Google_Service_Mirror_Timeline_Resource($this, $this->serviceName, 'timeline', json_decode('{"methods": {"delete": {"id": "mirror.timeline.delete", "path": "timeline/{id}", "httpMethod": "DELETE", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.timeline.get", "path": "timeline/{id}", "httpMethod": "GET", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "TimelineItem"}}, "insert": {"id": "mirror.timeline.insert", "path": "timeline", "httpMethod": "POST", "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline"}}}}, "list": {"id": "mirror.timeline.list", "path": "timeline", "httpMethod": "GET", "parameters": {"bundleId": {"type": "string", "location": "query"}, "includeDeleted": {"type": "boolean", "location": "query"}, "maxResults": {"type": "integer", "format": "uint32", "location": "query"}, "orderBy": {"type": "string", "enum": ["displayTime", "writeTime"], "location": "query"}, "pageToken": {"type": "string", "location": "query"}, "pinnedOnly": {"type": "boolean", "location": "query"}, "sourceItemId": {"type": "string", "location": "query"}}, "response": {"$ref": "TimelineListResponse"}}, "patch": {"id": "mirror.timeline.patch", "path": "timeline/{id}", "httpMethod": "PATCH", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}}, "update": {"id": "mirror.timeline.update", "path": "timeline/{id}", "httpMethod": "PUT", "parameters": {"id": {"type": "string", "required": true, "location": "path"}}, "request": {"$ref": "TimelineItem"}, "response": {"$ref": "TimelineItem"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline/{id}"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline/{id}"}}}}}}', true));
    $this->timeline_attachments = new Google_Service_Mirror_TimelineAttachments_Resource($this, $this->serviceName, 'attachments', json_decode('{"methods": {"delete": {"id": "mirror.timeline.attachments.delete", "path": "timeline/{itemId}/attachments/{attachmentId}", "httpMethod": "DELETE", "parameters": {"attachmentId": {"type": "string", "required": true, "location": "path"}, "itemId": {"type": "string", "required": true, "location": "path"}}}, "get": {"id": "mirror.timeline.attachments.get", "path": "timeline/{itemId}/attachments/{attachmentId}", "httpMethod": "GET", "parameters": {"attachmentId": {"type": "string", "required": true, "location": "path"}, "itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Attachment"}, "supportsMediaDownload": true}, "insert": {"id": "mirror.timeline.attachments.insert", "path": "timeline/{itemId}/attachments", "httpMethod": "POST", "parameters": {"itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "Attachment"}, "supportsMediaUpload": true, "mediaUpload": {"accept": ["audio/*", "image/*", "video/*"], "maxSize": "10MB", "protocols": {"simple": {"multipart": true, "path": "/upload/mirror/v1/timeline/{itemId}/attachments"}, "resumable": {"multipart": true, "path": "/resumable/upload/mirror/v1/timeline/{itemId}/attachments"}}}}, "list": {"id": "mirror.timeline.attachments.list", "path": "timeline/{itemId}/attachments", "httpMethod": "GET", "parameters": {"itemId": {"type": "string", "required": true, "location": "path"}}, "response": {"$ref": "AttachmentsListResponse"}}}}', true));

  }
}


  /**
   * The "contacts" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new Google_Service_Mirror(...);
   *   $contacts = $mirrorService->contacts;
   *  </code>
   */
  class Google_Service_Mirror_Contacts_Resource extends Google_Service_Resource {


    /**
     * Deletes a contact. (contacts.delete)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a single contact by ID. (contacts.get)
     *
     * @param string $id The ID of the contact.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Contact
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a new contact. (contacts.insert)
     *
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Contact
     */
    public function insert(Google_Service_Mirror_Contact $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of contacts for the authenticated user. (contacts.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_ContactsListResponse
     */
    public function listContacts($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_ContactsListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a contact in place. This method supports patch semantics. (contacts.patch)
     *
     * @param string $id The ID of the contact.
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Contact
     */
    public function patch($id, Google_Service_Mirror_Contact $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Contact($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a contact in place. (contacts.update)
     *
     * @param string $id The ID of the contact.
     * @param Google_Contact $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Contact
     */
    public function update($id, Google_Service_Mirror_Contact $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Contact($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "locations" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new Google_Service_Mirror(...);
   *   $locations = $mirrorService->locations;
   *  </code>
   */
  class Google_Service_Mirror_Locations_Resource extends Google_Service_Resource {


    /**
     * Gets a single location by ID. (locations.get)
     *
     * @param string $id The ID of the location or latest for the last known location.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Location
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Location($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of locations for the user. (locations.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_LocationsListResponse
     */
    public function listLocations($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_LocationsListResponse($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "subscriptions" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new Google_Service_Mirror(...);
   *   $subscriptions = $mirrorService->subscriptions;
   *  </code>
   */
  class Google_Service_Mirror_Subscriptions_Resource extends Google_Service_Resource {


    /**
     * Deletes a subscription. (subscriptions.delete)
     *
     * @param string $id The ID of the subscription.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Creates a new subscription. (subscriptions.insert)
     *
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Subscription
     */
    public function insert(Google_Service_Mirror_Subscription $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Subscription($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of subscriptions for the authenticated user and service. (subscriptions.list)
     *
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_SubscriptionsListResponse
     */
    public function listSubscriptions($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_SubscriptionsListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates an existing subscription in place. (subscriptions.update)
     *
     * @param string $id The ID of the subscription.
     * @param Google_Subscription $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Subscription
     */
    public function update($id, Google_Service_Mirror_Subscription $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Subscription($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "timeline" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new Google_Service_Mirror(...);
   *   $timeline = $mirrorService->timeline;
   *  </code>
   */
  class Google_Service_Mirror_Timeline_Resource extends Google_Service_Resource {


    /**
     * Deletes a timeline item. (timeline.delete)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     */
    public function delete($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Gets a single timeline item by ID. (timeline.get)
     *
     * @param string $id The ID of the timeline item.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_TimelineItem
     */
    public function get($id, $optParams = array()) {
      $params = array('id' => $id);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Inserts a new item into the timeline. (timeline.insert)
     *
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_TimelineItem
     */
    public function insert(Google_Service_Mirror_TimelineItem $postBody, $optParams = array()) {
      $params = array('postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Retrieves a list of timeline items for the authenticated user. (timeline.list)
     *
     * @param array $optParams Optional parameters.
     *
     * @opt_param string bundleId If provided, only items with the given bundleId will be returned.
     * @opt_param bool includeDeleted If true, tombstone records for deleted items will be returned.
     * @opt_param string maxResults The maximum number of items to include in the response, used for paging.
     * @opt_param string orderBy Controls the order in which timeline items are returned.
     * @opt_param string pageToken Token for the page of results to return.
     * @opt_param bool pinnedOnly If true, only pinned items will be returned.
     * @opt_param string sourceItemId If provided, only items with the given sourceItemId will be returned.
     * @return Google_Service_Mirror_TimelineListResponse
     */
    public function listTimeline($optParams = array()) {
      $params = array();
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_TimelineListResponse($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a timeline item in place. This method supports patch semantics. (timeline.patch)
     *
     * @param string $id The ID of the timeline item.
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_TimelineItem
     */
    public function patch($id, Google_Service_Mirror_TimelineItem $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('patch', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_TimelineItem($data);
      } else {
        return $data;
      }
    }
    /**
     * Updates a timeline item in place. (timeline.update)
     *
     * @param string $id The ID of the timeline item.
     * @param Google_TimelineItem $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_TimelineItem
     */
    public function update($id, Google_Service_Mirror_TimelineItem $postBody, $optParams = array()) {
      $params = array('id' => $id, 'postBody' => $postBody);
      $params = array_merge($params, $optParams);
      $data = $this->__call('update', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_TimelineItem($data);
      } else {
        return $data;
      }
    }
  }

  /**
   * The "attachments" collection of methods.
   * Typical usage is:
   *  <code>
   *   $mirrorService = new Google_Service_Mirror(...);
   *   $attachments = $mirrorService->attachments;
   *  </code>
   */
  class Google_Service_Mirror_TimelineAttachments_Resource extends Google_Service_Resource {


    /**
     * Deletes an attachment from a timeline item. (attachments.delete)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     */
    public function delete($itemId, $attachmentId, $optParams = array()) {
      $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('delete', array($params));
      return $data;
    }
    /**
     * Retrieves an attachment on a timeline item by item ID and attachment ID. (attachments.get)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param string $attachmentId The ID of the attachment.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Attachment
     */
    public function get($itemId, $attachmentId, $optParams = array()) {
      $params = array('itemId' => $itemId, 'attachmentId' => $attachmentId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('get', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Attachment($data);
      } else {
        return $data;
      }
    }
    /**
     * Adds a new attachment to a timeline item. (attachments.insert)
     *
     * @param string $itemId The ID of the timeline item the attachment belongs to.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_Attachment
     */
    public function insert($itemId, $optParams = array()) {
      $params = array('itemId' => $itemId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('insert', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_Attachment($data);
      } else {
        return $data;
      }
    }
    /**
     * Returns a list of attachments for a timeline item. (attachments.list)
     *
     * @param string $itemId The ID of the timeline item whose attachments should be listed.
     * @param array $optParams Optional parameters.
     * @return Google_Service_Mirror_AttachmentsListResponse
     */
    public function listTimelineAttachments($itemId, $optParams = array()) {
      $params = array('itemId' => $itemId);
      $params = array_merge($params, $optParams);
      $data = $this->__call('list', array($params));
      if ($this->useObjects()) {
        return new Google_Service_Mirror_AttachmentsListResponse($data);
      } else {
        return $data;
      }
    }
  }




class Google_Service_Mirror_Attachment
    extends Google_Model {
  public $contentType;
  public $contentUrl;
  public $id;
  public $isProcessingContent;
  public function setContentType($contentType) {
    $this->contentType = $contentType;
  }
  public function getContentType() {
    return $this->contentType;
  }
  public function setContentUrl($contentUrl) {
    $this->contentUrl = $contentUrl;
  }
  public function getContentUrl() {
    return $this->contentUrl;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setIsProcessingContent($isProcessingContent) {
    $this->isProcessingContent = $isProcessingContent;
  }
  public function getIsProcessingContent() {
    return $this->isProcessingContent;
  }
}

class Google_Service_Mirror_AttachmentsListResponse
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Mirror_Attachment';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Service_Mirror_Contact
    extends Google_Collection {
  public $acceptTypes;
  public $displayName;
  public $id;
  public $imageUrls;
  public $kind;
  public $phoneNumber;
  public $priority;
  public $source;
  public $type;
  public function setAcceptTypes($acceptTypes) {
    $this->acceptTypes = $acceptTypes;
  }
  public function getAcceptTypes() {
    return $this->acceptTypes;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setImageUrls($imageUrls) {
    $this->imageUrls = $imageUrls;
  }
  public function getImageUrls() {
    return $this->imageUrls;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setPhoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
  }
  public function getPhoneNumber() {
    return $this->phoneNumber;
  }
  public function setPriority($priority) {
    $this->priority = $priority;
  }
  public function getPriority() {
    return $this->priority;
  }
  public function setSource($source) {
    $this->source = $source;
  }
  public function getSource() {
    return $this->source;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}

class Google_Service_Mirror_ContactsListResponse
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Mirror_Contact';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Service_Mirror_Location
    extends Google_Model {
  public $accuracy;
  public $address;
  public $displayName;
  public $id;
  public $kind;
  public $latitude;
  public $longitude;
  public $timestamp;
  public function setAccuracy($accuracy) {
    $this->accuracy = $accuracy;
  }
  public function getAccuracy() {
    return $this->accuracy;
  }
  public function setAddress($address) {
    $this->address = $address;
  }
  public function getAddress() {
    return $this->address;
  }
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLatitude($latitude) {
    $this->latitude = $latitude;
  }
  public function getLatitude() {
    return $this->latitude;
  }
  public function setLongitude($longitude) {
    $this->longitude = $longitude;
  }
  public function getLongitude() {
    return $this->longitude;
  }
  public function setTimestamp($timestamp) {
    $this->timestamp = $timestamp;
  }
  public function getTimestamp() {
    return $this->timestamp;
  }
}

class Google_Service_Mirror_LocationsListResponse
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Mirror_Location';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Service_Mirror_MenuItem
    extends Google_Collection {
  public $action;
  public $id;
  public $removeWhenSelected;
  protected $__valuesType = 'Google_Service_Mirror_MenuValue';
  protected $__valuesDataType = 'array';
  public $values;
  public function setAction($action) {
    $this->action = $action;
  }
  public function getAction() {
    return $this->action;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setRemoveWhenSelected($removeWhenSelected) {
    $this->removeWhenSelected = $removeWhenSelected;
  }
  public function getRemoveWhenSelected() {
    return $this->removeWhenSelected;
  }
  public function setValues($values) {
    $this->values = $values;
  }
  public function getValues() {
    return $this->values;
  }
}

class Google_Service_Mirror_MenuValue
    extends Google_Model {
  public $displayName;
  public $iconUrl;
  public $state;
  public function setDisplayName($displayName) {
    $this->displayName = $displayName;
  }
  public function getDisplayName() {
    return $this->displayName;
  }
  public function setIconUrl($iconUrl) {
    $this->iconUrl = $iconUrl;
  }
  public function getIconUrl() {
    return $this->iconUrl;
  }
  public function setState($state) {
    $this->state = $state;
  }
  public function getState() {
    return $this->state;
  }
}

class Google_Service_Mirror_Notification
    extends Google_Collection {
  public $collection;
  public $itemId;
  public $operation;
  protected $__userActionsType = 'Google_Service_Mirror_UserAction';
  protected $__userActionsDataType = 'array';
  public $userActions;
  public $userToken;
  public $verifyToken;
  public function setCollection($collection) {
    $this->collection = $collection;
  }
  public function getCollection() {
    return $this->collection;
  }
  public function setItemId($itemId) {
    $this->itemId = $itemId;
  }
  public function getItemId() {
    return $this->itemId;
  }
  public function setOperation($operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
  public function setUserActions($userActions) {
    $this->userActions = $userActions;
  }
  public function getUserActions() {
    return $this->userActions;
  }
  public function setUserToken($userToken) {
    $this->userToken = $userToken;
  }
  public function getUserToken() {
    return $this->userToken;
  }
  public function setVerifyToken($verifyToken) {
    $this->verifyToken = $verifyToken;
  }
  public function getVerifyToken() {
    return $this->verifyToken;
  }
}

class Google_Service_Mirror_NotificationConfig
    extends Google_Model {
  public $deliveryTime;
  public $level;
  public function setDeliveryTime($deliveryTime) {
    $this->deliveryTime = $deliveryTime;
  }
  public function getDeliveryTime() {
    return $this->deliveryTime;
  }
  public function setLevel($level) {
    $this->level = $level;
  }
  public function getLevel() {
    return $this->level;
  }
}

class Google_Service_Mirror_Subscription
    extends Google_Collection {
  public $callbackUrl;
  public $collection;
  public $id;
  public $kind;
  protected $__notificationType = 'Google_Service_Mirror_Notification';
  protected $__notificationDataType = '';
  public $notification;
  public $operation;
  public $updated;
  public $userToken;
  public $verifyToken;
  public function setCallbackUrl($callbackUrl) {
    $this->callbackUrl = $callbackUrl;
  }
  public function getCallbackUrl() {
    return $this->callbackUrl;
  }
  public function setCollection($collection) {
    $this->collection = $collection;
  }
  public function getCollection() {
    return $this->collection;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNotification(Google_Service_Mirror_Notification$notification) {
    $this->notification = $notification;
  }
  public function getNotification() {
    return $this->notification;
  }
  public function setOperation($operation) {
    $this->operation = $operation;
  }
  public function getOperation() {
    return $this->operation;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
  public function setUserToken($userToken) {
    $this->userToken = $userToken;
  }
  public function getUserToken() {
    return $this->userToken;
  }
  public function setVerifyToken($verifyToken) {
    $this->verifyToken = $verifyToken;
  }
  public function getVerifyToken() {
    return $this->verifyToken;
  }
}

class Google_Service_Mirror_SubscriptionsListResponse
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Mirror_Subscription';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
}

class Google_Service_Mirror_TimelineItem
    extends Google_Collection {
  protected $__attachmentsType = 'Google_Service_Mirror_Attachment';
  protected $__attachmentsDataType = 'array';
  public $attachments;
  public $bundleId;
  public $canonicalUrl;
  public $created;
  protected $__creatorType = 'Google_Service_Mirror_Contact';
  protected $__creatorDataType = '';
  public $creator;
  public $displayTime;
  public $etag;
  public $html;
  public $htmlPages;
  public $id;
  public $inReplyTo;
  public $isBundleCover;
  public $isDeleted;
  public $isPinned;
  public $kind;
  protected $__locationType = 'Google_Service_Mirror_Location';
  protected $__locationDataType = '';
  public $location;
  protected $__menuItemsType = 'Google_Service_Mirror_MenuItem';
  protected $__menuItemsDataType = 'array';
  public $menuItems;
  protected $__notificationType = 'Google_Service_Mirror_NotificationConfig';
  protected $__notificationDataType = '';
  public $notification;
  public $pinScore;
  protected $__recipientsType = 'Google_Service_Mirror_Contact';
  protected $__recipientsDataType = 'array';
  public $recipients;
  public $selfLink;
  public $sourceItemId;
  public $speakableText;
  public $text;
  public $title;
  public $updated;
  public function setAttachments($attachments) {
    $this->attachments = $attachments;
  }
  public function getAttachments() {
    return $this->attachments;
  }
  public function setBundleId($bundleId) {
    $this->bundleId = $bundleId;
  }
  public function getBundleId() {
    return $this->bundleId;
  }
  public function setCanonicalUrl($canonicalUrl) {
    $this->canonicalUrl = $canonicalUrl;
  }
  public function getCanonicalUrl() {
    return $this->canonicalUrl;
  }
  public function setCreated($created) {
    $this->created = $created;
  }
  public function getCreated() {
    return $this->created;
  }
  public function setCreator(Google_Service_Mirror_Contact$creator) {
    $this->creator = $creator;
  }
  public function getCreator() {
    return $this->creator;
  }
  public function setDisplayTime($displayTime) {
    $this->displayTime = $displayTime;
  }
  public function getDisplayTime() {
    return $this->displayTime;
  }
  public function setEtag($etag) {
    $this->etag = $etag;
  }
  public function getEtag() {
    return $this->etag;
  }
  public function setHtml($html) {
    $this->html = $html;
  }
  public function getHtml() {
    return $this->html;
  }
  public function setHtmlPages($htmlPages) {
    $this->htmlPages = $htmlPages;
  }
  public function getHtmlPages() {
    return $this->htmlPages;
  }
  public function setId($id) {
    $this->id = $id;
  }
  public function getId() {
    return $this->id;
  }
  public function setInReplyTo($inReplyTo) {
    $this->inReplyTo = $inReplyTo;
  }
  public function getInReplyTo() {
    return $this->inReplyTo;
  }
  public function setIsBundleCover($isBundleCover) {
    $this->isBundleCover = $isBundleCover;
  }
  public function getIsBundleCover() {
    return $this->isBundleCover;
  }
  public function setIsDeleted($isDeleted) {
    $this->isDeleted = $isDeleted;
  }
  public function getIsDeleted() {
    return $this->isDeleted;
  }
  public function setIsPinned($isPinned) {
    $this->isPinned = $isPinned;
  }
  public function getIsPinned() {
    return $this->isPinned;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setLocation(Google_Service_Mirror_Location$location) {
    $this->location = $location;
  }
  public function getLocation() {
    return $this->location;
  }
  public function setMenuItems($menuItems) {
    $this->menuItems = $menuItems;
  }
  public function getMenuItems() {
    return $this->menuItems;
  }
  public function setNotification(Google_Service_Mirror_NotificationConfig$notification) {
    $this->notification = $notification;
  }
  public function getNotification() {
    return $this->notification;
  }
  public function setPinScore($pinScore) {
    $this->pinScore = $pinScore;
  }
  public function getPinScore() {
    return $this->pinScore;
  }
  public function setRecipients($recipients) {
    $this->recipients = $recipients;
  }
  public function getRecipients() {
    return $this->recipients;
  }
  public function setSelfLink($selfLink) {
    $this->selfLink = $selfLink;
  }
  public function getSelfLink() {
    return $this->selfLink;
  }
  public function setSourceItemId($sourceItemId) {
    $this->sourceItemId = $sourceItemId;
  }
  public function getSourceItemId() {
    return $this->sourceItemId;
  }
  public function setSpeakableText($speakableText) {
    $this->speakableText = $speakableText;
  }
  public function getSpeakableText() {
    return $this->speakableText;
  }
  public function setText($text) {
    $this->text = $text;
  }
  public function getText() {
    return $this->text;
  }
  public function setTitle($title) {
    $this->title = $title;
  }
  public function getTitle() {
    return $this->title;
  }
  public function setUpdated($updated) {
    $this->updated = $updated;
  }
  public function getUpdated() {
    return $this->updated;
  }
}

class Google_Service_Mirror_TimelineListResponse
    extends Google_Collection {
  protected $__itemsType = 'Google_Service_Mirror_TimelineItem';
  protected $__itemsDataType = 'array';
  public $items;
  public $kind;
  public $nextPageToken;
  public function setItems($items) {
    $this->items = $items;
  }
  public function getItems() {
    return $this->items;
  }
  public function setKind($kind) {
    $this->kind = $kind;
  }
  public function getKind() {
    return $this->kind;
  }
  public function setNextPageToken($nextPageToken) {
    $this->nextPageToken = $nextPageToken;
  }
  public function getNextPageToken() {
    return $this->nextPageToken;
  }
}

class Google_Service_Mirror_UserAction
    extends Google_Model {
  public $payload;
  public $type;
  public function setPayload($payload) {
    $this->payload = $payload;
  }
  public function getPayload() {
    return $this->payload;
  }
  public function setType($type) {
    $this->type = $type;
  }
  public function getType() {
    return $this->type;
  }
}