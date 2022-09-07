
# Terminal Action Action Type

Describes the type of this unit and indicates which field contains the unit information. This is an ‘open’ enum.

## Enumeration

`TerminalActionActionType`

## Fields

| Name | Description |
|  --- | --- |
| `CHECKOUT` | The action represents an action with checkout options. Details are contained in the<br>checkout_options field. |
| `REFUND` | The action represents an action with refund options. Details are contained in the<br>refund_options field. |
| `QR_CODE` | The action represents a request to display a QR code. Details are contained in the<br>qr_code_options field. |
| `PING` | The action represents a request to check if the specific device is<br>online or currently active with the merchant in question. Does not require an action options value. |
| `SAVE_CARD` | Represents a request to save a card for future card-on-file use. |
| `SIGNATURE` | The action represents a request to capture a buyer's signature. Details are contained<br>in the signature_options object. |
| `CONFIRMATION` | The action represents a request to collect a buyer's confirmation decision to the<br>displayed terms. Details are contained in the confirmation_options object. |

