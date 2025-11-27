@php
    $heading = $heading ?? 'Ready to start your journey?';
    $subheading = $subheading ?? 'Get your personalized counseling session free.';
    $buttonText = $buttonText ?? 'Book Free Live Demo Class';
@endphp

<div class="cta-section">
    <div class="cta-content">
        <div class="cta-text">
            <h3 class="cta-heading">{{ $heading }}</h3>
            <p class="cta-subheading">{{ $subheading }}</p>
        </div>
        <a href="https://www.occultscience.in/enquiry-form-home/" target="_blank" class="cta-button">{{ $buttonText }}</a>
    </div>
</div>
<style>
.cta-section {
    background-color: #f5f1e8;
    padding: 15px 20px;
    width: 100%;
    border-radius: 12px;
}

.cta-content {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
}

.cta-text {
    flex: 1;
}

.cta-heading {
    font-family: sans-serif;
    font-size: 22px;
    font-weight: 600;
    color: #333333;
    margin: 0 0 6px 0;
    line-height: 1;
}

.cta-subheading {
    font-family: sans-serif;
    font-size: 15px;
    font-weight: 400;
    color: #666666;
    margin: 0;
    line-height: 1;
}

.cta-button {
    background-color: #ff6b35;
    color: #ffffff;
    font-family: sans-serif;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    padding: 12px 24px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    white-space: nowrap;
    text-decoration: none;
    display: inline-block;
    box-shadow: 0 2px 8px rgba(255, 107, 53, 0.3);
    transition: all 0.3s ease;
}

.cta-button:hover {
    background-color: #e55a2b;
    box-shadow: 0 4px 12px rgba(255, 107, 53, 0.4);
    transform: translateY(-1px);
    color: #ffffff;
}

@media (max-width: 768px) {
    .cta-section {
        padding: 20px 15px;
    }

    .cta-content {
        flex-direction: column;
        align-items: center;
        gap: 15px;
    }

    .cta-text {
        width: 100%;
        text-align: center;
    }

    .cta-heading {
        font-size: 18px;
        line-height: 1.3;
        margin: 0 0 8px 0;
    }

    .cta-subheading {
        font-size: 14px;
        line-height: 1.4;
    }

    .cta-button {
        width: 100%;
        padding: 14px 20px;
        font-size: 13px;
        white-space: normal;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .cta-section {
        padding: 18px 12px;
    }

    .cta-heading {
        font-size: 16px;
        margin: 0 0 6px 0;
    }

    .cta-subheading {
        font-size: 13px;
    }

    .cta-button {
        width: fit-content;
        padding: 12px 18px;
        font-size: 12px;
        margin: 0 auto;
        display: block;
    }
}
</style>



