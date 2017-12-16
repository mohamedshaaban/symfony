<?php

/* SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig */
class __TwigTemplate_d02d573ff4309ff4c4facb64f6855e64ad968f9626fa1a08158f00999ca2ab63 extends Twig_Template
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
        $__internal_1a429794dfb4eb1a0b10e857f3a6b5f38f009ac9b2a3e2354efbb70c0e0dc6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a429794dfb4eb1a0b10e857f3a6b5f38f009ac9b2a3e2354efbb70c0e0dc6aa->enter($__internal_1a429794dfb4eb1a0b10e857f3a6b5f38f009ac9b2a3e2354efbb70c0e0dc6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig"));

        $__internal_b6ab6ac8526f07be17c996b0421ca742f8e03d1edff970a7f843c6c76e512363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ab6ac8526f07be17c996b0421ca742f8e03d1edff970a7f843c6c76e512363->enter($__internal_b6ab6ac8526f07be17c996b0421ca742f8e03d1edff970a7f843c6c76e512363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig"));

        // line 1
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "user", array()))) {
            // line 2
            echo "    ";
            $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig", 2);
            // line 3
            echo "    ";
            echo $context["label"]->macro_status(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 3, $this->getSourceContext()); })()), "user", array()), "enabled", array()));
            echo "
";
        } else {
            // line 5
            echo "    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest"), "html", null, true);
            echo "
    </span>
";
        }
        
        $__internal_1a429794dfb4eb1a0b10e857f3a6b5f38f009ac9b2a3e2354efbb70c0e0dc6aa->leave($__internal_1a429794dfb4eb1a0b10e857f3a6b5f38f009ac9b2a3e2354efbb70c0e0dc6aa_prof);

        
        $__internal_b6ab6ac8526f07be17c996b0421ca742f8e03d1edff970a7f843c6c76e512363->leave($__internal_b6ab6ac8526f07be17c996b0421ca742f8e03d1edff970a7f843c6c76e512363_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  36 => 5,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if data.user is not null %}
    {% import '@SyliusUi/Macro/labels.html.twig' as label %}
    {{ label.status(data.user.enabled) }}
{% else %}
    <span class=\"ui icon label\">
        <i class=\"spy icon\"></i> {{ 'sylius.ui.guest'|trans }}
    </span>
{% endif %}
", "SyliusAdminBundle:Customer/Grid/Field:enabled.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Grid/Field/enabled.html.twig");
    }
}
