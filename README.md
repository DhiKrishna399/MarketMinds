## MarketMinds: AI Copywriter for Businesses & Creators

MarketMinds is a SaaS-style web app where creators and businesses can generate marketing copy (ads, headlines, and social templates) from a short product description.

Instead of staring at a blank page, a user provides:

- `Product`: what they sell
- `Description`: details, features, audience, etc.
- `Tone`: e.g. informative, excited, happy
- `Service`: which output style they want (ads vs headlines, channel-specific formats, etc.)

The app then produces ready-to-use copy for marketing campaigns and advertisements.

---

## What makes this project interesting

This repository combines two layers:

1. **A production-ready SaaS foundation** (authentication, user dashboard, theming, subscription/billing hooks, and API key management) built on **Laravel + Voyager** via the embedded `wave/` kit.
2. **A custom AI copywriter experience** implemented as a Tailwind theme dashboard. The UI calls an external model service (currently wired to AWS Lambda via API Gateway) and renders multiple copy variations with "Copy" and "Copy All" actions.

The result is a demo/starting point that shows both the product vision (an AI copywriter for non-writers) and the engineering effort to ship it inside a real app shell.

---

## How copy generation works

The AI generation UI lives in the Tailwind theme dashboard view:

- `marketminds/resources/views/themes/tailwind/dashboard/index.blade.php`

### User flow

1. User logs in and visits `/dashboard`.
2. Dashboard collects `Product`, `Description`, and a selected `Tone`.
3. The sidebar lets the user choose a `Service` (template type). Service selection is defined in `marketminds/public/serviceMap.js`.
4. When the user clicks **Generate**, the frontend sends a `POST` request to an AWS API Gateway endpoint (`gpt_ad_service` / `gpt_ad_service_2`).
5. The response is parsed into multiple copy strings and displayed in a list. Each item includes a **Copy** button plus a **Copy All** option.

### Request payload

The frontend sends JSON that includes the user inputs and the selected service:

- `Product`
- `Description`
- `Tone`
- `Language` (currently hardcoded to `English`)
- `Service` (based on the selected service/template)

### Expected response

The UI expects the service to return a list/array-like representation of generated text (then it sanitizes/normalizes it and splits it into individual variations).

---

## Example use case (pots business)

If someone sells pots and enters:

- Product: `Handmade Clay Pots`
- Description: `We sell heat-retaining handmade clay pots for home cooking. Durable, stylish, and food-safe. Great for small kitchens and gifting.`
- Tone: `Informative`
- Service: `General Ads` (or another selected template)

The app generates multiple ad-ready options, headlines, and social-style copy so the business can quickly run ads, posts, and promotional campaigns.

---

## Services & template types

Service categories and service names are defined in:

- `marketminds/public/serviceMap.js`

Examples present in the current map:

- General Ads
- General Headlines
- Facebook Ads
- Facebook Headlines
- Instagram Reel Titles

The dashboard passes the selected `Service` identifier to the external generator, so the backend/Lambda can decide which prompt template to use.

Note: the default dashboard view currently sets an initial service id for the "Social Media Template" experience, and the sidebar selection updates the active service before generation.

---

## Local development

This is a Laravel app located under `marketminds/`.

1. Prerequisites: PHP (Laravel 9, see `marketminds/composer.json`), MySQL (update `.env`), and Node/npm (only needed if you choose to rebuild theme assets).
2. Install dependencies: `cd marketminds` and run `composer install`.
3. Environment: copy `.env.example` to `.env`, then update database credentials and `APP_URL`.
4. Database setup: run `php artisan key:generate`, `php artisan migrate`, and `php artisan db:seed`.
5. Run the app: run `php artisan serve`, then visit the URL shown in your terminal and log in to access `/dashboard`.

---

## Configuration notes (important for production)

The current dashboard template wires generation directly from the browser to external AWS API Gateway endpoints.

If you deploy this for real users, consider:

- Moving API calls server-side (so keys/secrets are never exposed to the browser)
- Storing endpoint URLs and any auth configuration in environment variables
- Updating endpoint URLs in `marketminds/resources/views/themes/tailwind/dashboard/index.blade.php` (search for `gpt_ad_service`)
- Making the service mapping consistent with whatever generator you deploy behind the API

---

## Project status

This repository is a working SaaS shell + a proof-of-concept AI copywriter UI. The copy generator itself is delegated to external endpoints; the main value here is showing the full product experience (inputs -> generation -> copy variations) in a real app.

