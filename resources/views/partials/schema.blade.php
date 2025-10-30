{{-- Dynamic Schema.org Structured Data --}}
<script type="application/ld+json">
@php
use Illuminate\Support\Facades\Request;

$schema = [
    "@context" => "https://schema.org",
    "@type" => "WebSite",
    "name" => "Airocode Technologies",
    "url" => url('/'),
    "description" => $metaDescription ?? "Airocode Technologies provides cutting-edge AI, web, and software development solutions for businesses and learners.",
    "publisher" => [
        "@type" => "Organization",
        "name" => "Airocode Technologies",
        "logo" => [
            "@type" => "ImageObject",
            "url" => asset('img/logo.png'),
        ],
    ],
];

if (Request::is('/')) {
    $schema["@type"] = "Organization";
    $schema["contactPoint"] = [
        "@type" => "ContactPoint",
        "telephone" => "91 467 51 567",
        "contactType" => "Customer Support",
        "availableLanguage" => "English",
        "areaServed" => "IN"
    ];
    $schema["sameAs"] = [
        "https://www.facebook.com/airocode",
        "https://www.instagram.com/airocode",
        "https://www.linkedin.com/company/airocode"
    ];
} elseif (Request::is('internship*') || Request::is('programs*')) {
    $schema["@type"] = "Course";
    $schema["name"] = $programName ?? "AI & ML Internship Program";
    $schema["description"] = $metaDescription ?? "Join Airocode Technologies’ internship programs to gain hands-on experience in AI, ML, and web development.";
    $schema["provider"] = [
        "@type" => "Organization",
        "name" => "Airocode Technologies",
        "url" => url('/')
    ];
} elseif (Request::is('blog*')) {
    $schema["@type"] = "Article";
    $schema["headline"] = $post->title ?? "Airocode Blog";
    $schema["author"] = [
        "@type" => "Person",
        "name" => $post->author->name ?? "Airocode Team"
    ];
    $schema["datePublished"] = $post->created_at ?? now();
    $schema["image"] = $post->image ?? asset('img/default.jpg');
    $schema["url"] = url()->current();
} elseif (Request::is('contact*')) {
    $schema["@type"] = "ContactPage";
    $schema["name"] = "Contact Airocode Technologies";
    $schema["description"] = "Reach out to Airocode Technologies for inquiries related to AI, web, software services, or programs.";
}

echo json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
@endphp
</script>
