<?php

/* SonataIntlBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_ab902f4d7cb54c2b4fac89f27070d68d298875ea6b09e81aa66746ca0681dfcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6569e932762cca0b859c7448f9601db02301f675ad704182b6ebf843e74f36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6569e932762cca0b859c7448f9601db02301f675ad704182b6ebf843e74f36f->enter($__internal_b6569e932762cca0b859c7448f9601db02301f675ad704182b6ebf843e74f36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig"));

        $__internal_fd5f72f3620fdc6b7bd0e28b4451b501fe11df159708d882de9cd6c364ab01e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5f72f3620fdc6b7bd0e28b4451b501fe11df159708d882de9cd6c364ab01e4->enter($__internal_fd5f72f3620fdc6b7bd0e28b4451b501fe11df159708d882de9cd6c364ab01e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["revision"]) || array_key_exists("revision", $context) ? $context["revision"] : (function () { throw new Twig_Error_Runtime('Variable "revision" does not exist.', 12, $this->getSourceContext()); })()), "timestamp", array()));
        echo "
";
        
        $__internal_b6569e932762cca0b859c7448f9601db02301f675ad704182b6ebf843e74f36f->leave($__internal_b6569e932762cca0b859c7448f9601db02301f675ad704182b6ebf843e74f36f_prof);

        
        $__internal_fd5f72f3620fdc6b7bd0e28b4451b501fe11df159708d882de9cd6c364ab01e4->leave($__internal_fd5f72f3620fdc6b7bd0e28b4451b501fe11df159708d882de9cd6c364ab01e4_prof);

    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{{ revision.timestamp | format_datetime }}
", "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\intl-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
