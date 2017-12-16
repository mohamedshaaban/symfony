<?php

/* SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig */
class __TwigTemplate_851242af2523f1094cc9243d9968724ec5cd5f559af36a6a10668bdd2f8815c9 extends Twig_Template
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
        $__internal_fc71ab82e19a03af98d3ded614c92b8436aa1f63d4c7b9f8f0b0db6b6d9834a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc71ab82e19a03af98d3ded614c92b8436aa1f63d4c7b9f8f0b0db6b6d9834a3->enter($__internal_fc71ab82e19a03af98d3ded614c92b8436aa1f63d4c7b9f8f0b0db6b6d9834a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig"));

        $__internal_8bb796a05454face20cbcf555f8241d3af1b456d4b2c0a82c85e77f6b1bdbc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bb796a05454face20cbcf555f8241d3af1b456d4b2c0a82c85e77f6b1bdbc3d->enter($__internal_8bb796a05454face20cbcf555f8241d3af1b456d4b2c0a82c85e77f6b1bdbc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig"));

        // line 1
        echo "<span class=\"ui olive";
        if ((array_key_exists("attached", $context) && ((isset($context["attached"]) || array_key_exists("attached", $context) ? $context["attached"] : (function () { throw new Twig_Error_Runtime('Variable "attached" does not exist.', 1, $this->getSourceContext()); })()) == true))) {
            echo " top attached";
        }
        echo " label\">
    <i class=\"clock icon\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 3, $this->getSourceContext()); })())), "html", null, true);
        echo "
</span>
";
        
        $__internal_fc71ab82e19a03af98d3ded614c92b8436aa1f63d4c7b9f8f0b0db6b6d9834a3->leave($__internal_fc71ab82e19a03af98d3ded614c92b8436aa1f63d4c7b9f8f0b0db6b6d9834a3_prof);

        
        $__internal_8bb796a05454face20cbcf555f8241d3af1b456d4b2c0a82c85e77f6b1bdbc3d->leave($__internal_8bb796a05454face20cbcf555f8241d3af1b456d4b2c0a82c85e77f6b1bdbc3d_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"ui olive{% if attached is defined and attached == true %} top attached{% endif %} label\">
    <i class=\"clock icon\"></i>
    {{ value|trans }}
</span>
", "SyliusAdminBundle:Order/Label/PaymentState:awaiting_payment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Label/PaymentState/awaiting_payment.html.twig");
    }
}
