<?php

/* SyliusAdminBundle:Dashboard:_customers.html.twig */
class __TwigTemplate_5ebc533c003f12d786257df5a33bf7399579ddb0475c3790a3c3a30641422418 extends Twig_Template
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
        $__internal_24d52db3e03c2d4c47998d94fc8b8fa4b8ca57493e482e0863f6bdb227abe17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d52db3e03c2d4c47998d94fc8b8fa4b8ca57493e482e0863f6bdb227abe17a->enter($__internal_24d52db3e03c2d4c47998d94fc8b8fa4b8ca57493e482e0863f6bdb227abe17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_customers.html.twig"));

        $__internal_c73518d484c331bfe8a534056740dee1ab7929b7fcbeb783f524e3425a38bfbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73518d484c331bfe8a534056740dee1ab7929b7fcbeb783f524e3425a38bfbc->enter($__internal_c73518d484c331bfe8a534056740dee1ab7929b7fcbeb783f524e3425a38bfbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Dashboard:_customers.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("SyliusUiBundle:Macro:messages.html.twig", "SyliusAdminBundle:Dashboard:_customers.html.twig", 1);
        // line 2
        $context["buttons"] = $this->loadTemplate("SyliusUiBundle:Macro:buttons.html.twig", "SyliusAdminBundle:Dashboard:_customers.html.twig", 2);
        // line 3
        $context["labels"] = $this->loadTemplate("SyliusUiBundle:Macro:labels.html.twig", "SyliusAdminBundle:Dashboard:_customers.html.twig", 3);
        // line 4
        echo "
<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.new_customers"), "html", null, true);
        echo "</h3>

    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 8, $this->getSourceContext()); })())) > 0)) {
            // line 9
            echo "        <table class=\"ui stackable table\" id=\"customers\">
            <thead>
                <th>";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.name"), "html", null, true);
            echo "</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new Twig_Error_Runtime('Variable "customers" does not exist.', 16, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 17
                echo "                <tr>
                    <td>
                        <strong>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "fullName", array()), "html", null, true);
                echo "</strong><br>
                        ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "email", array()), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 23
                if ((null === twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "user", array()))) {
                    // line 24
                    echo "                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.guest"), "html", null, true);
                    echo "
                            </span>
                        ";
                }
                // line 28
                echo "                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            ";
                // line 31
                echo $context["buttons"]->macro_show($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["customer"], "id", array()))));
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 39
            echo "        ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
    ";
        }
        // line 41
        echo "</div>
";
        
        $__internal_24d52db3e03c2d4c47998d94fc8b8fa4b8ca57493e482e0863f6bdb227abe17a->leave($__internal_24d52db3e03c2d4c47998d94fc8b8fa4b8ca57493e482e0863f6bdb227abe17a_prof);

        
        $__internal_c73518d484c331bfe8a534056740dee1ab7929b7fcbeb783f524e3425a38bfbc->leave($__internal_c73518d484c331bfe8a534056740dee1ab7929b7fcbeb783f524e3425a38bfbc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Dashboard:_customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  104 => 39,  99 => 36,  88 => 31,  83 => 28,  77 => 25,  74 => 24,  72 => 23,  66 => 20,  62 => 19,  58 => 17,  54 => 16,  46 => 11,  42 => 9,  40 => 8,  35 => 6,  31 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:messages.html.twig' as messages %}
{% import 'SyliusUiBundle:Macro:buttons.html.twig' as buttons %}
{% import 'SyliusUiBundle:Macro:labels.html.twig' as labels %}

<div class=\"ui segment\">
    <h3 class=\"ui dividing header\">{{ 'sylius.ui.new_customers'|trans }}</h3>

    {% if customers|length > 0 %}
        <table class=\"ui stackable table\" id=\"customers\">
            <thead>
                <th>{{ 'sylius.ui.name'|trans }}</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
            {% for customer in customers %}
                <tr>
                    <td>
                        <strong>{{ customer.fullName }}</strong><br>
                        {{ customer.email }}
                    </td>
                    <td>
                        {% if customer.user is null %}
                            <span class=\"ui icon label\">
                                <i class=\"spy icon\"></i> {{ 'sylius.ui.guest'|trans }}
                            </span>
                        {% endif %}
                    </td>
                    <td>
                        <div class=\"ui right floated buttons\">
                            {{ buttons.show(path('sylius_admin_customer_show', {'id': customer.id})) }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    {% else %}
        {{ messages.info('sylius.ui.no_results_to_display') }}
    {% endif %}
</div>
", "SyliusAdminBundle:Dashboard:_customers.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Dashboard/_customers.html.twig");
    }
}
