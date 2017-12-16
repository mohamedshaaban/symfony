<?php

/* SyliusAdminBundle:Customer/Show/Statistics:index.html.twig */
class __TwigTemplate_7a7fa854005d2b6b18bc2e10d3c059172d49df6cd28638a19c4b38666d52f3c3 extends Twig_Template
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
        $__internal_a8d32a609fdd3c04d49a3d986de39550de814e3e72f6560e477e67f5c4f8d448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8d32a609fdd3c04d49a3d986de39550de814e3e72f6560e477e67f5c4f8d448->enter($__internal_a8d32a609fdd3c04d49a3d986de39550de814e3e72f6560e477e67f5c4f8d448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig"));

        $__internal_186aa9b676ea085094522c8d76a0178e4086cf8bb68c0ef834a8ad8ca4f17cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186aa9b676ea085094522c8d76a0178e4086cf8bb68c0ef834a8ad8ca4f17cb6->enter($__internal_186aa9b676ea085094522c8d76a0178e4086cf8bb68c0ef834a8ad8ca4f17cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusAdmin/Common/Macro/money.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", 1);
        // line 2
        echo "
<div class=\"ui segment\" id=\"statistics\">
    ";
        // line 4
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 4, $this->getSourceContext()); })()), "perChannelsStatistics", array()))) {
            // line 5
            echo "        <div class=\"ui accordion\">
            ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["statistics"]) || array_key_exists("statistics", $context) ? $context["statistics"] : (function () { throw new Twig_Error_Runtime('Variable "statistics" does not exist.', 6, $this->getSourceContext()); })()), "perChannelsStatistics", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["statistic"]) {
                // line 7
                echo "                ";
                $this->loadTemplate("@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", 7)->display($context);
                // line 8
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "        </div>
    ";
        } else {
            // line 11
            echo "        <h4>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.this_customer_has_not_completed_any_orders_yet"), "html", null, true);
            echo "</h4>
    ";
        }
        // line 13
        echo "</div>
";
        
        $__internal_a8d32a609fdd3c04d49a3d986de39550de814e3e72f6560e477e67f5c4f8d448->leave($__internal_a8d32a609fdd3c04d49a3d986de39550de814e3e72f6560e477e67f5c4f8d448_prof);

        
        $__internal_186aa9b676ea085094522c8d76a0178e4086cf8bb68c0ef834a8ad8ca4f17cb6->leave($__internal_186aa9b676ea085094522c8d76a0178e4086cf8bb68c0ef834a8ad8ca4f17cb6_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 9,  56 => 8,  53 => 7,  36 => 6,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusAdmin/Common/Macro/money.html.twig\" as money %}

<div class=\"ui segment\" id=\"statistics\">
    {% if statistics.perChannelsStatistics is not empty %}
        <div class=\"ui accordion\">
            {% for statistic in statistics.perChannelsStatistics %}
                {% include '@SyliusAdmin/Customer/Show/Statistics/_perChannel.html.twig' %}
            {% endfor %}
        </div>
    {% else %}
        <h4>{{ 'sylius.ui.this_customer_has_not_completed_any_orders_yet'|trans }}</h4>
    {% endif %}
</div>
", "SyliusAdminBundle:Customer/Show/Statistics:index.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Show/Statistics/index.html.twig");
    }
}
