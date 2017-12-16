<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_afa5a6edd5e21055a0d94f9ef051bfa7c6791611f0a3347cd7749b8d3e5b7163 extends Twig_Template
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
        $__internal_d8a9d578e757c2404216bb1990d4d6a600fde935a8136da452aa74e03f495e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a9d578e757c2404216bb1990d4d6a600fde935a8136da452aa74e03f495e6d->enter($__internal_d8a9d578e757c2404216bb1990d4d6a600fde935a8136da452aa74e03f495e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        $__internal_eceb06ea0982d90d16b5f1579fbcb501af27e759a96474172c1732efc8f631b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eceb06ea0982d90d16b5f1579fbcb501af27e759a96474172c1732efc8f631b5->enter($__internal_eceb06ea0982d90d16b5f1579fbcb501af27e759a96474172c1732efc8f631b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 1, $this->getSourceContext()); })()), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_d8a9d578e757c2404216bb1990d4d6a600fde935a8136da452aa74e03f495e6d->leave($__internal_d8a9d578e757c2404216bb1990d4d6a600fde935a8136da452aa74e03f495e6d_prof);

        
        $__internal_eceb06ea0982d90d16b5f1579fbcb501af27e759a96474172c1732efc8f631b5->leave($__internal_eceb06ea0982d90d16b5f1579fbcb501af27e759a96474172c1732efc8f631b5_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
