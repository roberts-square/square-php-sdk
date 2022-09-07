<?php

declare(strict_types=1);

namespace Square\Models;

use stdClass;

/**
 * Describes delivery details of an order fulfillment.
 */
class OrderFulfillmentDeliveryDetails implements \JsonSerializable
{
    /**
     * @var OrderFulfillmentRecipient|null
     */
    private $recipient;

    /**
     * @var string|null
     */
    private $scheduleType;

    /**
     * @var string|null
     */
    private $placedAt;

    /**
     * @var string|null
     */
    private $deliverAt;

    /**
     * @var string|null
     */
    private $prepTimeDuration;

    /**
     * @var string|null
     */
    private $deliveryWindowDuration;

    /**
     * @var string|null
     */
    private $note;

    /**
     * @var string|null
     */
    private $completedAt;

    /**
     * @var string|null
     */
    private $inProgressAt;

    /**
     * @var string|null
     */
    private $rejectedAt;

    /**
     * @var string|null
     */
    private $readyAt;

    /**
     * @var string|null
     */
    private $deliveredAt;

    /**
     * @var string|null
     */
    private $canceledAt;

    /**
     * @var string|null
     */
    private $cancelReason;

    /**
     * @var string|null
     */
    private $courierPickupAt;

    /**
     * @var string|null
     */
    private $courierPickupWindowDuration;

    /**
     * @var bool|null
     */
    private $isNoContactDelivery;

    /**
     * @var string|null
     */
    private $dropoffNotes;

    /**
     * @var string|null
     */
    private $courierProviderName;

    /**
     * @var string|null
     */
    private $courierSupportPhoneNumber;

    /**
     * @var string|null
     */
    private $squareDeliveryId;

    /**
     * @var string|null
     */
    private $externalDeliveryId;

    /**
     * Returns Recipient.
     * Information about the fulfillment recipient.
     */
    public function getRecipient(): ?OrderFulfillmentRecipient
    {
        return $this->recipient;
    }

    /**
     * Sets Recipient.
     * Information about the fulfillment recipient.
     *
     * @maps recipient
     */
    public function setRecipient(?OrderFulfillmentRecipient $recipient): void
    {
        $this->recipient = $recipient;
    }

    /**
     * Returns Schedule Type.
     * The schedule type of the delivery fulfillment.
     */
    public function getScheduleType(): ?string
    {
        return $this->scheduleType;
    }

    /**
     * Sets Schedule Type.
     * The schedule type of the delivery fulfillment.
     *
     * @maps schedule_type
     */
    public function setScheduleType(?string $scheduleType): void
    {
        $this->scheduleType = $scheduleType;
    }

    /**
     * Returns Placed At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was placed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * Must be in RFC 3339 timestamp format, e.g., "2016-09-04T23:59:33.123Z".
     */
    public function getPlacedAt(): ?string
    {
        return $this->placedAt;
    }

    /**
     * Sets Placed At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was placed.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * Must be in RFC 3339 timestamp format, e.g., "2016-09-04T23:59:33.123Z".
     *
     * @maps placed_at
     */
    public function setPlacedAt(?string $placedAt): void
    {
        $this->placedAt = $placedAt;
    }

    /**
     * Returns Deliver At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * that represents the start of the delivery period.
     * When the fulfillment `schedule_type` is `ASAP`, the field is automatically
     * set to the current time plus the `prep_time_duration`.
     * Otherwise, the application can set this field while the fulfillment `state` is
     * `PROPOSED`, `RESERVED`, or `PREPARED` (any time before the
     * terminal state such as `COMPLETED`, `CANCELED`, and `FAILED`).
     *
     * The timestamp must be in RFC 3339 format
     * (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getDeliverAt(): ?string
    {
        return $this->deliverAt;
    }

    /**
     * Sets Deliver At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * that represents the start of the delivery period.
     * When the fulfillment `schedule_type` is `ASAP`, the field is automatically
     * set to the current time plus the `prep_time_duration`.
     * Otherwise, the application can set this field while the fulfillment `state` is
     * `PROPOSED`, `RESERVED`, or `PREPARED` (any time before the
     * terminal state such as `COMPLETED`, `CANCELED`, and `FAILED`).
     *
     * The timestamp must be in RFC 3339 format
     * (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps deliver_at
     */
    public function setDeliverAt(?string $deliverAt): void
    {
        $this->deliverAt = $deliverAt;
    }

    /**
     * Returns Prep Time Duration.
     * The duration of time it takes to prepare and deliver this fulfillment.
     * The timestamp must be in RFC 3339 format (for example, "P1W3D").
     */
    public function getPrepTimeDuration(): ?string
    {
        return $this->prepTimeDuration;
    }

    /**
     * Sets Prep Time Duration.
     * The duration of time it takes to prepare and deliver this fulfillment.
     * The timestamp must be in RFC 3339 format (for example, "P1W3D").
     *
     * @maps prep_time_duration
     */
    public function setPrepTimeDuration(?string $prepTimeDuration): void
    {
        $this->prepTimeDuration = $prepTimeDuration;
    }

    /**
     * Returns Delivery Window Duration.
     * The time period after the `deliver_at` timestamp in which to deliver the order.
     * Applications can set this field when the fulfillment `state` is
     * `PROPOSED`, `RESERVED`, or `PREPARED` (any time before the terminal state
     * such as `COMPLETED`, `CANCELED`, and `FAILED`).
     *
     * The timestamp must be in RFC 3339 format (for example, "P1W3D").
     */
    public function getDeliveryWindowDuration(): ?string
    {
        return $this->deliveryWindowDuration;
    }

    /**
     * Sets Delivery Window Duration.
     * The time period after the `deliver_at` timestamp in which to deliver the order.
     * Applications can set this field when the fulfillment `state` is
     * `PROPOSED`, `RESERVED`, or `PREPARED` (any time before the terminal state
     * such as `COMPLETED`, `CANCELED`, and `FAILED`).
     *
     * The timestamp must be in RFC 3339 format (for example, "P1W3D").
     *
     * @maps delivery_window_duration
     */
    public function setDeliveryWindowDuration(?string $deliveryWindowDuration): void
    {
        $this->deliveryWindowDuration = $deliveryWindowDuration;
    }

    /**
     * Returns Note.
     * Provides additional instructions about the delivery fulfillment.
     * It is displayed in the Square Point of Sale application and set by the API.
     */
    public function getNote(): ?string
    {
        return $this->note;
    }

    /**
     * Sets Note.
     * Provides additional instructions about the delivery fulfillment.
     * It is displayed in the Square Point of Sale application and set by the API.
     *
     * @maps note
     */
    public function setNote(?string $note): void
    {
        $this->note = $note;
    }

    /**
     * Returns Completed At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicates when the seller completed the fulfillment.
     * This field is automatically set when  fulfillment `state` changes to `COMPLETED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getCompletedAt(): ?string
    {
        return $this->completedAt;
    }

    /**
     * Sets Completed At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicates when the seller completed the fulfillment.
     * This field is automatically set when  fulfillment `state` changes to `COMPLETED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps completed_at
     */
    public function setCompletedAt(?string $completedAt): void
    {
        $this->completedAt = $completedAt;
    }

    /**
     * Returns In Progress At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicates when the seller started processing the fulfillment.
     * This field is automatically set when the fulfillment `state` changes to `RESERVED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getInProgressAt(): ?string
    {
        return $this->inProgressAt;
    }

    /**
     * Sets In Progress At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicates when the seller started processing the fulfillment.
     * This field is automatically set when the fulfillment `state` changes to `RESERVED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps in_progress_at
     */
    public function setInProgressAt(?string $inProgressAt): void
    {
        $this->inProgressAt = $inProgressAt;
    }

    /**
     * Returns Rejected At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was rejected. This field is
     * automatically set when the fulfillment `state` changes to `FAILED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getRejectedAt(): ?string
    {
        return $this->rejectedAt;
    }

    /**
     * Sets Rejected At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was rejected. This field is
     * automatically set when the fulfillment `state` changes to `FAILED`.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps rejected_at
     */
    public function setRejectedAt(?string $rejectedAt): void
    {
        $this->rejectedAt = $rejectedAt;
    }

    /**
     * Returns Ready At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the seller marked the fulfillment as ready for
     * courier pickup. This field is automatically set when the fulfillment `state` changes
     * to PREPARED.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getReadyAt(): ?string
    {
        return $this->readyAt;
    }

    /**
     * Sets Ready At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the seller marked the fulfillment as ready for
     * courier pickup. This field is automatically set when the fulfillment `state` changes
     * to PREPARED.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps ready_at
     */
    public function setReadyAt(?string $readyAt): void
    {
        $this->readyAt = $readyAt;
    }

    /**
     * Returns Delivered At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was delivered to the recipient.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getDeliveredAt(): ?string
    {
        return $this->deliveredAt;
    }

    /**
     * Sets Delivered At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was delivered to the recipient.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps delivered_at
     */
    public function setDeliveredAt(?string $deliveredAt): void
    {
        $this->deliveredAt = $deliveredAt;
    }

    /**
     * Returns Canceled At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was canceled. This field is automatically
     * set when the fulfillment `state` changes to `CANCELED`.
     *
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getCanceledAt(): ?string
    {
        return $this->canceledAt;
    }

    /**
     * Sets Canceled At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when the fulfillment was canceled. This field is automatically
     * set when the fulfillment `state` changes to `CANCELED`.
     *
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps canceled_at
     */
    public function setCanceledAt(?string $canceledAt): void
    {
        $this->canceledAt = $canceledAt;
    }

    /**
     * Returns Cancel Reason.
     * The delivery cancellation reason. Max length: 100 characters.
     */
    public function getCancelReason(): ?string
    {
        return $this->cancelReason;
    }

    /**
     * Sets Cancel Reason.
     * The delivery cancellation reason. Max length: 100 characters.
     *
     * @maps cancel_reason
     */
    public function setCancelReason(?string $cancelReason): void
    {
        $this->cancelReason = $cancelReason;
    }

    /**
     * Returns Courier Pickup At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when an order can be picked up by the courier for delivery.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     */
    public function getCourierPickupAt(): ?string
    {
        return $this->courierPickupAt;
    }

    /**
     * Sets Courier Pickup At.
     * The [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates)
     * indicating when an order can be picked up by the courier for delivery.
     * The timestamp must be in RFC 3339 format (for example, "2016-09-04T23:59:33.123Z").
     *
     * @maps courier_pickup_at
     */
    public function setCourierPickupAt(?string $courierPickupAt): void
    {
        $this->courierPickupAt = $courierPickupAt;
    }

    /**
     * Returns Courier Pickup Window Duration.
     * The period of time in which the order should be picked up by the courier after the
     * `courier_pickup_at` timestamp.
     * The time must be in RFC 3339 format (for example, "P1W3D").
     */
    public function getCourierPickupWindowDuration(): ?string
    {
        return $this->courierPickupWindowDuration;
    }

    /**
     * Sets Courier Pickup Window Duration.
     * The period of time in which the order should be picked up by the courier after the
     * `courier_pickup_at` timestamp.
     * The time must be in RFC 3339 format (for example, "P1W3D").
     *
     * @maps courier_pickup_window_duration
     */
    public function setCourierPickupWindowDuration(?string $courierPickupWindowDuration): void
    {
        $this->courierPickupWindowDuration = $courierPickupWindowDuration;
    }

    /**
     * Returns Is No Contact Delivery.
     * Whether the delivery is preferred to be no contact.
     */
    public function getIsNoContactDelivery(): ?bool
    {
        return $this->isNoContactDelivery;
    }

    /**
     * Sets Is No Contact Delivery.
     * Whether the delivery is preferred to be no contact.
     *
     * @maps is_no_contact_delivery
     */
    public function setIsNoContactDelivery(?bool $isNoContactDelivery): void
    {
        $this->isNoContactDelivery = $isNoContactDelivery;
    }

    /**
     * Returns Dropoff Notes.
     * A note to provide additional instructions about how to deliver the order.
     */
    public function getDropoffNotes(): ?string
    {
        return $this->dropoffNotes;
    }

    /**
     * Sets Dropoff Notes.
     * A note to provide additional instructions about how to deliver the order.
     *
     * @maps dropoff_notes
     */
    public function setDropoffNotes(?string $dropoffNotes): void
    {
        $this->dropoffNotes = $dropoffNotes;
    }

    /**
     * Returns Courier Provider Name.
     * The name of the courier provider.
     */
    public function getCourierProviderName(): ?string
    {
        return $this->courierProviderName;
    }

    /**
     * Sets Courier Provider Name.
     * The name of the courier provider.
     *
     * @maps courier_provider_name
     */
    public function setCourierProviderName(?string $courierProviderName): void
    {
        $this->courierProviderName = $courierProviderName;
    }

    /**
     * Returns Courier Support Phone Number.
     * The support phone number of the courier.
     */
    public function getCourierSupportPhoneNumber(): ?string
    {
        return $this->courierSupportPhoneNumber;
    }

    /**
     * Sets Courier Support Phone Number.
     * The support phone number of the courier.
     *
     * @maps courier_support_phone_number
     */
    public function setCourierSupportPhoneNumber(?string $courierSupportPhoneNumber): void
    {
        $this->courierSupportPhoneNumber = $courierSupportPhoneNumber;
    }

    /**
     * Returns Square Delivery Id.
     * The identifier for the delivery created by Square.
     */
    public function getSquareDeliveryId(): ?string
    {
        return $this->squareDeliveryId;
    }

    /**
     * Sets Square Delivery Id.
     * The identifier for the delivery created by Square.
     *
     * @maps square_delivery_id
     */
    public function setSquareDeliveryId(?string $squareDeliveryId): void
    {
        $this->squareDeliveryId = $squareDeliveryId;
    }

    /**
     * Returns External Delivery Id.
     * The identifier for the delivery created by the third-party courier service.
     */
    public function getExternalDeliveryId(): ?string
    {
        return $this->externalDeliveryId;
    }

    /**
     * Sets External Delivery Id.
     * The identifier for the delivery created by the third-party courier service.
     *
     * @maps external_delivery_id
     */
    public function setExternalDeliveryId(?string $externalDeliveryId): void
    {
        $this->externalDeliveryId = $externalDeliveryId;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->recipient)) {
            $json['recipient']                      = $this->recipient;
        }
        if (isset($this->scheduleType)) {
            $json['schedule_type']                  = $this->scheduleType;
        }
        if (isset($this->placedAt)) {
            $json['placed_at']                      = $this->placedAt;
        }
        if (isset($this->deliverAt)) {
            $json['deliver_at']                     = $this->deliverAt;
        }
        if (isset($this->prepTimeDuration)) {
            $json['prep_time_duration']             = $this->prepTimeDuration;
        }
        if (isset($this->deliveryWindowDuration)) {
            $json['delivery_window_duration']       = $this->deliveryWindowDuration;
        }
        if (isset($this->note)) {
            $json['note']                           = $this->note;
        }
        if (isset($this->completedAt)) {
            $json['completed_at']                   = $this->completedAt;
        }
        if (isset($this->inProgressAt)) {
            $json['in_progress_at']                 = $this->inProgressAt;
        }
        if (isset($this->rejectedAt)) {
            $json['rejected_at']                    = $this->rejectedAt;
        }
        if (isset($this->readyAt)) {
            $json['ready_at']                       = $this->readyAt;
        }
        if (isset($this->deliveredAt)) {
            $json['delivered_at']                   = $this->deliveredAt;
        }
        if (isset($this->canceledAt)) {
            $json['canceled_at']                    = $this->canceledAt;
        }
        if (isset($this->cancelReason)) {
            $json['cancel_reason']                  = $this->cancelReason;
        }
        if (isset($this->courierPickupAt)) {
            $json['courier_pickup_at']              = $this->courierPickupAt;
        }
        if (isset($this->courierPickupWindowDuration)) {
            $json['courier_pickup_window_duration'] = $this->courierPickupWindowDuration;
        }
        if (isset($this->isNoContactDelivery)) {
            $json['is_no_contact_delivery']         = $this->isNoContactDelivery;
        }
        if (isset($this->dropoffNotes)) {
            $json['dropoff_notes']                  = $this->dropoffNotes;
        }
        if (isset($this->courierProviderName)) {
            $json['courier_provider_name']          = $this->courierProviderName;
        }
        if (isset($this->courierSupportPhoneNumber)) {
            $json['courier_support_phone_number']   = $this->courierSupportPhoneNumber;
        }
        if (isset($this->squareDeliveryId)) {
            $json['square_delivery_id']             = $this->squareDeliveryId;
        }
        if (isset($this->externalDeliveryId)) {
            $json['external_delivery_id']           = $this->externalDeliveryId;
        }
        $json = array_filter($json, function ($val) {
            return $val !== null;
        });

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
