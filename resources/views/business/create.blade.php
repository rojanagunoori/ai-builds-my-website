<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Business Details - AI Builds My Website</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 35px 15px;
            background: #f5f6fa;
            font-family: Arial, sans-serif;
            color: #20243a;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 14px;
            box-shadow: 0 4px 18px rgba(0,0,0,.05);
        }

        h1 {
            margin-top: 0;
            color: #5742bd;
        }

        .subtitle {
            color: #777b8c;
            line-height: 1.6;
            margin-bottom: 28px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .field {
            margin-bottom: 20px;
        }

        .full {
            grid-column: 1 / -1;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
        }

        input, textarea {
            width: 100%;
            padding: 13px;
            border: 1px solid #dfe1e8;
            border-radius: 7px;
            font-size: 15px;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus, textarea:focus {
            outline: 2px solid #8973ed;
            border-color: #8973ed;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .submit-btn {
            background: #624bc8;
            color: white;
            border: none;
            padding: 14px 24px;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
        }

        .back {
            display: inline-block;
            margin-left: 12px;
            color: #5742bd;
            text-decoration: none;
        }

        .required {
            color: #dc2626;
        }

        @media(max-width: 600px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .container {
                padding: 22px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Add Your Business Details</h1>

    <p class="subtitle">
        Tell us about your business. This information will help
        AI create a professional website for you.
    </p>

    @if ($errors->any())
        <div style="background:#fee2e2;padding:15px;border-radius:8px;margin-bottom:20px;color:#991b1b">
            Please correct the errors in the form.
        </div>
    @endif

    <form action="{{ route('business.store') }}" method="POST">
        @csrf

        <div class="form-grid">

            <div class="field">
                <label>Business Name <span class="required">*</span></label>
                <input type="text" name="name"
                    value="{{ old('name') }}"
                    placeholder="Example: Roja Fashion Store"
                    required>
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Business Category</label>
                <input type="text" name="category"
                    value="{{ old('category') }}"
                    placeholder="Example: Fashion, Restaurant">
                @error('category') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>City <span class="required">*</span></label>
                <input type="text" name="city"
                    value="{{ old('city') }}"
                    placeholder="Example: Hyderabad"
                    required>
                @error('city') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Phone Number</label>
                <input type="text" name="phone"
                    value="{{ old('phone') }}"
                    placeholder="Business contact number">
                @error('phone') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field full">
                <label>Business Address</label>
                <textarea name="address"
                    placeholder="Enter your complete business address">{{ old('address') }}</textarea>
                @error('address') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field full">
                <label>Business Email</label>
                <input type="email" name="email"
                    value="{{ old('email') }}"
                    placeholder="business@example.com">
                @error('email') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field full">
                <label>Business Description</label>
                <textarea name="description"
                    placeholder="Describe your products, services and business">{{ old('description') }}</textarea>
                @error('description') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Website URL</label>
                <input type="url" name="website_url"
                    value="{{ old('website_url') }}"
                    placeholder="https://example.com">
                @error('website_url') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Facebook URL</label>
                <input type="url" name="facebook_url"
                    value="{{ old('facebook_url') }}"
                    placeholder="https://facebook.com/...">
                @error('facebook_url') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Instagram URL</label>
                <input type="url" name="instagram_url"
                    value="{{ old('instagram_url') }}"
                    placeholder="https://instagram.com/...">
                @error('instagram_url') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="field">
                <label>Google Business URL</label>
                <input type="url" name="google_business_url"
                    value="{{ old('google_business_url') }}"
                    placeholder="https://...">
                @error('google_business_url') <div class="error">{{ $message }}</div> @enderror
            </div>

        </div>

        <button type="submit" class="submit-btn">
            Save Business Details
        </button>

        <a href="{{ route('dashboard') }}" class="back">
            Back to Dashboard
        </a>

    </form>
</div>

</body>
</html>