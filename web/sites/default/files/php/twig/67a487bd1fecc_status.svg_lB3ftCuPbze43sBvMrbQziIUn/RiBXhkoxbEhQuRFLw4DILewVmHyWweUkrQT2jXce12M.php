<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @olivero/../images/status.svg */
class __TwigTemplate_6121f4a17abd2b0ea4a790d1c37e33df extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"32px\" height=\"32px\" viewBox=\"0 0 32 32\">
  <path d=\"M26.8,12.6c0,0.4-0.1,0.7-0.4,0.9L15.1,24.9c-0.2,0.2-0.6,0.4-1,0.4c-0.3,0-0.7-0.1-0.9-0.4l-7.5-7.5c-0.2-0.2-0.4-0.6-0.4-0.9c0-0.4,0.1-0.7,0.4-1l1.9-1.9c0.2-0.2,0.6-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4l4.7,4.7l8.5-8.5c0.2-0.2,0.6-0.4,0.9-0.4c0.4,0,0.7,0.1,0.9,0.4l1.9,1.9C26.6,11.9,26.8,12.3,26.8,12.6z M32,16c0-8.8-7.2-16-16-16C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16C24.8,32,32,24.8,32,16z\"/>
</svg>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@olivero/../images/status.svg";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@olivero/../images/status.svg", "/var/www/html/web/core/themes/olivero/images/status.svg");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
