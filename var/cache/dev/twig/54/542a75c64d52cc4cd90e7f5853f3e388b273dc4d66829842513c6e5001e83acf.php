<?php

/* SonataCoreBundle:Form:color.html.twig */
class __TwigTemplate_2e5678f8ec1eb3bbf7718923903c4fe0092bf3faf7bd346813802b04af21dc6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_widget' => array($this, 'block_sonata_type_color_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc1dbf88524a754d714dfbc28c2185803fb5bc50bba092fcf159fff34051932c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1dbf88524a754d714dfbc28c2185803fb5bc50bba092fcf159fff34051932c->enter($__internal_fc1dbf88524a754d714dfbc28c2185803fb5bc50bba092fcf159fff34051932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        $__internal_9fa1c9461cf7dd1a7ec885777beae53bf492e9780f3ccf267fc6cc89a0d3de2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fa1c9461cf7dd1a7ec885777beae53bf492e9780f3ccf267fc6cc89a0d3de2a->enter($__internal_9fa1c9461cf7dd1a7ec885777beae53bf492e9780f3ccf267fc6cc89a0d3de2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataCoreBundle:Form:color.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_widget', $context, $blocks);
        
        $__internal_fc1dbf88524a754d714dfbc28c2185803fb5bc50bba092fcf159fff34051932c->leave($__internal_fc1dbf88524a754d714dfbc28c2185803fb5bc50bba092fcf159fff34051932c_prof);

        
        $__internal_9fa1c9461cf7dd1a7ec885777beae53bf492e9780f3ccf267fc6cc89a0d3de2a->leave($__internal_9fa1c9461cf7dd1a7ec885777beae53bf492e9780f3ccf267fc6cc89a0d3de2a_prof);

    }

    public function block_sonata_type_color_widget($context, array $blocks = array())
    {
        $__internal_e90d88bb8b7f4f3620cdef3dfe6389b6b7c15ae6c90a2ff4b0c3132ef2cc829b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90d88bb8b7f4f3620cdef3dfe6389b6b7c15ae6c90a2ff4b0c3132ef2cc829b->enter($__internal_e90d88bb8b7f4f3620cdef3dfe6389b6b7c15ae6c90a2ff4b0c3132ef2cc829b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        $__internal_5beb7450c0fb2959db6525c603f69a866137ce700fe389ee2901e86ae1768714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5beb7450c0fb2959db6525c603f69a866137ce700fe389ee2901e86ae1768714->enter($__internal_5beb7450c0fb2959db6525c603f69a866137ce700fe389ee2901e86ae1768714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_widget"));

        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <input type=\"color\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5beb7450c0fb2959db6525c603f69a866137ce700fe389ee2901e86ae1768714->leave($__internal_5beb7450c0fb2959db6525c603f69a866137ce700fe389ee2901e86ae1768714_prof);

        
        $__internal_e90d88bb8b7f4f3620cdef3dfe6389b6b7c15ae6c90a2ff4b0c3132ef2cc829b->leave($__internal_e90d88bb8b7f4f3620cdef3dfe6389b6b7c15ae6c90a2ff4b0c3132ef2cc829b_prof);

    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:color.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  26 => 11,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% block sonata_type_color_widget %}
    {% spaceless %}
        <input type=\"color\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
    {% endspaceless %}
{% endblock sonata_type_color_widget %}
", "SonataCoreBundle:Form:color.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sonata-project\\core-bundle/Resources/views/Form/color.html.twig");
    }
}
