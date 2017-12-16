<?php

/* SyliusAdminBundle:Order/Show:_shipment.html.twig */
class __TwigTemplate_672e197840878ef0dd450530e30de6f10044b66b95928047472870f12a37ded4 extends Twig_Template
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
        $__internal_82a91184f14e52405c338276c2e735759ae9b8339375ca0673cd14ff73f2763f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82a91184f14e52405c338276c2e735759ae9b8339375ca0673cd14ff73f2763f->enter($__internal_82a91184f14e52405c338276c2e735759ae9b8339375ca0673cd14ff73f2763f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        $__internal_d8cb1e458e83c8b120657af76d4a6d6b00eb39c68f7c7f1fe933d4b3f39825d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8cb1e458e83c8b120657af76d4a6d6b00eb39c68f7c7f1fe933d4b3f39825d5->enter($__internal_d8cb1e458e83c8b120657af76d4a6d6b00eb39c68f7c7f1fe933d4b3f39825d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_shipment.html.twig"));

        // line 1
        $context["label"] = $this->loadTemplate("@SyliusUi/Macro/labels.html.twig", "SyliusAdminBundle:Order/Show:_shipment.html.twig", 1);
        // line 2
        echo "
<div class=\"item\">
    <div class=\"right floated content\">
        ";
        // line 5
        echo $context["label"]->macro_default($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 5, $this->getSourceContext()); })()), "state", array()))));
        echo "
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 10, $this->getSourceContext()); })()), "method", array()), "html", null, true);
        echo "
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 13, $this->getSourceContext()); })()), "method", array()), "zone", array()), "html", null, true);
        echo "
        </div>
    </div>
    ";
        // line 16
        if ($this->env->getExtension('SM\Extension\Twig\SMExtension')->can((isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 16, $this->getSourceContext()); })()), "ship", "sylius_shipment")) {
            // line 17
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_partial_shipment_ship", array("orderId" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 17, $this->getSourceContext()); })()), "id", array()), "id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 17, $this->getSourceContext()); })()), "id", array()))));
            echo "
    ";
        }
        // line 19
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 19, $this->getSourceContext()); })()), "tracking", array()))) {
            // line 20
            echo "        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> ";
            // line 21
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tracking_code")), "html", null, true);
            echo "</span>
            <p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["shipment"]) || array_key_exists("shipment", $context) ? $context["shipment"] : (function () { throw new Twig_Error_Runtime('Variable "shipment" does not exist.', 22, $this->getSourceContext()); })()), "tracking", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 25
        echo "</div>
";
        
        $__internal_82a91184f14e52405c338276c2e735759ae9b8339375ca0673cd14ff73f2763f->leave($__internal_82a91184f14e52405c338276c2e735759ae9b8339375ca0673cd14ff73f2763f_prof);

        
        $__internal_d8cb1e458e83c8b120657af76d4a6d6b00eb39c68f7c7f1fe933d4b3f39825d5->leave($__internal_d8cb1e458e83c8b120657af76d4a6d6b00eb39c68f7c7f1fe933d4b3f39825d5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  70 => 22,  66 => 21,  63 => 20,  60 => 19,  54 => 17,  52 => 16,  46 => 13,  40 => 10,  32 => 5,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/labels.html.twig' as label %}

<div class=\"item\">
    <div class=\"right floated content\">
        {{ label.default(('sylius.ui.'~shipment.state)|trans) }}
    </div>
    <i class=\"large truck icon\"></i>
    <div class=\"content\">
        <div class=\"header\">
            {{ shipment.method }}
        </div>
        <div class=\"description\">
            <i class=\"globe icon\"></i>{{ shipment.method.zone }}
        </div>
    </div>
    {% if sm_can(shipment, 'ship', 'sylius_shipment') %}
        {{ render(path('sylius_admin_partial_shipment_ship', {'orderId': order.id, 'id': shipment.id})) }}
    {% endif %}
    {% if shipment.tracking is not empty %}
        <div class=\"ui segment\">
            <span class=\"ui top attached icon label\"><i class=\"plane icon\"></i> {{ 'sylius.ui.tracking_code'|trans|upper }}</span>
            <p>{{ shipment.tracking }}</p>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Order/Show:_shipment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_shipment.html.twig");
    }
}
