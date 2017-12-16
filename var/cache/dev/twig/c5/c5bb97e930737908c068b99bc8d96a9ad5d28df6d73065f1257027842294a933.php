<?php

/* SyliusAdminBundle:Customer/Show:_header.html.twig */
class __TwigTemplate_0c7fac4c70e30c209674b9b1caf3e6f25e8dcdf01f00eea6e7688ff609967c00 extends Twig_Template
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
        $__internal_2825f9608cc315d8167d4237751cc304d320c925bbc3af70555e323fd7c57dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2825f9608cc315d8167d4237751cc304d320c925bbc3af70555e323fd7c57dfa->enter($__internal_2825f9608cc315d8167d4237751cc304d320c925bbc3af70555e323fd7c57dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_header.html.twig"));

        $__internal_2579671666d60551b7f8cea4ac1886397ac1f09fbfc202a53973dd9f5c606c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2579671666d60551b7f8cea4ac1886397ac1f09fbfc202a53973dd9f5c606c4b->enter($__internal_2579671666d60551b7f8cea4ac1886397ac1f09fbfc202a53973dd9f5c606c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show:_header.html.twig"));

        // line 1
        echo "<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            ";
        // line 5
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer"] ?? null), "fullName", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["customer"] ?? null), "fullName", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest_customer"))), "html", null, true);
        echo "
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 9, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
                    </div>
                    ";
        // line 11
        if ((null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 11, $this->getSourceContext()); })()), "user", array()))) {
            // line 12
            echo "                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest"), "html", null, true);
            echo "
                            </span>
                        </div>
                    ";
        }
        // line 18
        echo "                </div>
            </div>
        </div>
    </h1>
</div>
";
        
        $__internal_2825f9608cc315d8167d4237751cc304d320c925bbc3af70555e323fd7c57dfa->leave($__internal_2825f9608cc315d8167d4237751cc304d320c925bbc3af70555e323fd7c57dfa_prof);

        
        $__internal_2579671666d60551b7f8cea4ac1886397ac1f09fbfc202a53973dd9f5c606c4b->leave($__internal_2579671666d60551b7f8cea4ac1886397ac1f09fbfc202a53973dd9f5c606c4b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  49 => 14,  45 => 12,  43 => 11,  38 => 9,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ten wide column\">
    <h1 class=\"ui header\">
        <i class=\"circular user icon\"></i>
        <div class=\"content\">
            {{ customer.fullName|default('sylius.ui.guest_customer'|trans) }}
            <div class=\"sub header\">
                <div class=\"ui horizontal divided list\">
                    <div class=\"item\">
                        {{ customer.email }}
                    </div>
                    {% if customer.user is null %}
                        <div class=\"item\">
                            <span class=\"ui label\">
                                <i class=\"icon spy\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        </div>
                    {% endif %}
                </div>
            </div>
        </div>
    </h1>
</div>
", "SyliusAdminBundle:Customer/Show:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/_header.html.twig");
    }
}
