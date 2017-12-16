<?php

/* SyliusAdminBundle:Order/Show:_summary.html.twig */
class __TwigTemplate_077bccac7d14e36464ce5f57a7a76b694900c6e407f4d28705f6a4a91e5d9ca9 extends Twig_Template
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
        $__internal_ec18e800aa102cd4d9756ead367c57c05f10934b31e59e65f90e5601aa58ad29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec18e800aa102cd4d9756ead367c57c05f10934b31e59e65f90e5601aa58ad29->enter($__internal_ec18e800aa102cd4d9756ead367c57c05f10934b31e59e65f90e5601aa58ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_summary.html.twig"));

        $__internal_2769a2b66724124ca80dc952a9689e387aa9780cb74d683b25f90c6eec013274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2769a2b66724124ca80dc952a9689e387aa9780cb74d683b25f90c6eec013274->enter($__internal_2769a2b66724124ca80dc952a9689e387aa9780cb74d683b25f90c6eec013274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_summary.html.twig"));

        // line 1
        echo "<table class=\"ui celled compact small table fixed\">
    <thead>
    <tr>
        <th class=\"six wide sylius-table-column-item\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order_item_product"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-unit_price\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.unit_price"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.discounted_unit_price"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-quantity\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.quantity"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-subtotal\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.subtotal"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-discount\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.discount"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-tax\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.tax"), "html", null, true);
        echo "</th>
        <th class=\"center aligned sylius-table-column-total\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.total"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 15, $this->getSourceContext()); })()), "items", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "        ";
            $this->loadTemplate("@SyliusAdmin/Order/Show/Summary/_item.html.twig", "SyliusAdminBundle:Order/Show:_summary.html.twig", 16)->display($context);
            // line 17
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </tbody>
    <tfoot>
    ";
        // line 20
        $this->loadTemplate("@SyliusAdmin/Order/Show/Summary/_totals.html.twig", "SyliusAdminBundle:Order/Show:_summary.html.twig", 20)->display($context);
        // line 21
        echo "    </tfoot>
</table>
";
        
        $__internal_ec18e800aa102cd4d9756ead367c57c05f10934b31e59e65f90e5601aa58ad29->leave($__internal_ec18e800aa102cd4d9756ead367c57c05f10934b31e59e65f90e5601aa58ad29_prof);

        
        $__internal_2769a2b66724124ca80dc952a9689e387aa9780cb74d683b25f90c6eec013274->leave($__internal_2769a2b66724124ca80dc952a9689e387aa9780cb74d683b25f90c6eec013274_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 21,  103 => 20,  99 => 18,  85 => 17,  82 => 16,  65 => 15,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table class=\"ui celled compact small table fixed\">
    <thead>
    <tr>
        <th class=\"six wide sylius-table-column-item\">{{ 'sylius.ui.order_item_product'|trans }}</th>
        <th class=\"center aligned sylius-table-column-unit_price\">{{ 'sylius.ui.unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-discounted_unit_price\">{{ 'sylius.ui.discounted_unit_price'|trans }}</th>
        <th class=\"center aligned sylius-table-column-quantity\">{{ 'sylius.ui.quantity'|trans }}</th>
        <th class=\"center aligned sylius-table-column-subtotal\">{{ 'sylius.ui.subtotal'|trans }}</th>
        <th class=\"center aligned sylius-table-column-discount\">{{ 'sylius.ui.discount'|trans }}</th>
        <th class=\"center aligned sylius-table-column-tax\">{{ 'sylius.ui.tax'|trans }}</th>
        <th class=\"center aligned sylius-table-column-total\">{{ 'sylius.ui.total'|trans }}</th>
    </tr>
    </thead>
    <tbody>
    {% for item in order.items %}
        {% include '@SyliusAdmin/Order/Show/Summary/_item.html.twig' %}
    {% endfor %}
    </tbody>
    <tfoot>
    {% include '@SyliusAdmin/Order/Show/Summary/_totals.html.twig' %}
    </tfoot>
</table>
", "SyliusAdminBundle:Order/Show:_summary.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_summary.html.twig");
    }
}
