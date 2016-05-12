# Download the Python helper library from twilio.com/docs/python/install
from twilio.rest import Client

# Your Account Sid and Auth Token from twilio.com/user/account
account = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"
token = "{{ auth_token }}"
client = Client(account, token)

service = client.notifications.v1.services("ISxxx")

response = service.update(friendly_name="NewFlowHipSlackChatDock")

print response