# Fake responses from Google My Business API.

🔌 Used in: https://github.com/lov3catch/google-my-business-sdk for testing.

## Current status

X | Account | Location | Review | Question | Answer | Post
--- | --- | --- | --- | --- | --- | ---
List | ✅ | ✅ | ✅ | ✅ | ✅ | ✅
Details | ❌ | ❌ | ✅ | ❌ | ❌ | ❌
Create | ❌ | ❌ | ❌ | ❌ | ❌ | ❌
Delete | ❌ | ❌ | ❌ | ❌ | ❌ | ❌

## Supported endpoints

- GET https://mybusiness.googleapis.com/v4/accounts/{account-id}/locations
- GET https://mybusiness.googleapis.com/v4/accounts/{account-id}/locations/{location-id}/reviews
- GET https://mybusiness.googleapis.com/v4/accounts/{account-id}/locations/{location-id}/reviews/{review-id}
- GET https://mybusiness.googleapis.com/v4/accounts/{account-id}/locations/{location-id}/questions
- GET https://mybusiness.googleapis.com/v4/accounts/{account-id}/locations/{location-id}/questions/{question-id}/answers

Mock placed [here](https://github.com/lov3catch/google-my-business-mock/tree/master/src/mock)

> Feel free to PR <3
