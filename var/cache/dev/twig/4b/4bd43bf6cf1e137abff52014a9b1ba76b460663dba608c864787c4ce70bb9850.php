<?php

/* SyliusShopBundle:Common/Order/Table:_headers.html.twig */
class __TwigTemplate_6dffef59c25d2f403c7393203f848aead59c234f0fa3a9c8bc590782ad0e8a2b extends Twig_Template
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
        $__internal_338382924d3e1109bdd5b9b1e5d17512e9d6d1a3a860fb0f60cbdea01cdc4361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_338382924d3e1109bdd5b9b1e5d17512e9d6d1a3a860fb0f60cbdea01cdc4361->enter($__internal_338382924d3e1109bdd5b9b1e5d17512e9d6d1a3a860fb0f60cbdea01cdc4361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        $__internal_5973699132cdb25b465f7d605d423c39e84be4b0a64960fc4c5fb3ea9999b3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5973699132cdb25b465f7d605d423c39e84be4b0a64960fc4c5fb3ea9999b3a6->enter($__internal_5973699132cdb25b465f7d605d423c39e84be4b0a64960fc4c5fb3ea9999b3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_headers.html.twig"));

        // line 1
        echo "<tr>
    <th class=\"sylius-table-column-item\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.item"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-price\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.price"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-qty\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.qty"), "html", null, true);
        echo "</th>
    <th class=\"sylius-table-column-subtotal\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
</tr>
";
        
        $__internal_338382924d3e1109bdd5b9b1e5d17512e9d6d1a3a860fb0f60cbdea01cdc4361->leave($__internal_338382924d3e1109bdd5b9b1e5d17512e9d6d1a3a860fb0f60cbdea01cdc4361_prof);

        
        $__internal_5973699132cdb25b465f7d605d423c39e84be4b0a64960fc4c5fb3ea9999b3a6->leave($__internal_5973699132cdb25b465f7d605d423c39e84be4b0a64960fc4c5fb3ea9999b3a6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <th class=\"sylius-table-column-item\">{{ 'sylius.ui.item'|trans }}</th>
    <th class=\"sylius-table-column-price\">{{ 'sylius.ui.price'|trans }}</th>
    <th class=\"sylius-table-column-qty\">{{ 'sylius.ui.qty'|trans }}</th>
    <th class=\"sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
</tr>
", "SyliusShopBundle:Common/Order/Table:_headers.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_headers.html.twig");
    }
}
