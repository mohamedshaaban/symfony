<?php

/* @SyliusShop/Product/Index/_sorting.html.twig */
class __TwigTemplate_903c2ed6e2a3eb21fde760b3ce35d1da2d24f54830c9748ddfed6c3fa3f40236 extends Twig_Template
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
        $__internal_bef606e5e2edba0228032645f4311c857b2c67a46346930f3e22d1b607775c0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef606e5e2edba0228032645f4311c857b2c67a46346930f3e22d1b607775c0e->enter($__internal_bef606e5e2edba0228032645f4311c857b2c67a46346930f3e22d1b607775c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sorting.html.twig"));

        $__internal_fd65d2637ba28b63052a474b3af53d403a5159481c98ef1ffc33d3ce1bb15177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd65d2637ba28b63052a474b3af53d403a5159481c98ef1ffc33d3ce1bb15177->enter($__internal_fd65d2637ba28b63052a474b3af53d403a5159481c98ef1ffc33d3ce1bb15177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_sorting.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 1, $this->getSourceContext()); })()), "data", array()), "nbResults", array()) > 0)) {
            // line 2
            echo "
";
            // line 3
            $context["definition"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 3, $this->getSourceContext()); })()), "definition", array());
            // line 4
            echo "
";
            // line 5
            $context["route"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
            // line 6
            $context["route_parameters"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
            // line 7
            echo "
";
            // line 8
            $context["criteria"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "criteria", 1 => array()), "method");
            // line 9
            echo "
";
            // line 10
            $context["default_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 10, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 10, $this->getSourceContext()); })()), array("criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 10, $this->getSourceContext()); })()))));
            // line 11
            $context["from_a_to_z_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 11, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 11, $this->getSourceContext()); })()), array("sorting" => array("name" => "asc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 11, $this->getSourceContext()); })()))));
            // line 12
            $context["from_z_to_a_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 12, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 12, $this->getSourceContext()); })()), array("sorting" => array("name" => "desc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 12, $this->getSourceContext()); })()))));
            // line 13
            $context["oldest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 13, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 13, $this->getSourceContext()); })()), array("sorting" => array("createdAt" => "asc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 13, $this->getSourceContext()); })()))));
            // line 14
            $context["newest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 14, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 14, $this->getSourceContext()); })()), array("sorting" => array("createdAt" => "desc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 14, $this->getSourceContext()); })()))));
            // line 15
            $context["cheapest_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 15, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 15, $this->getSourceContext()); })()), array("sorting" => array("price" => "asc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 15, $this->getSourceContext()); })()))));
            // line 16
            $context["most_expensive_first_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new Twig_Error_Runtime('Variable "route" does not exist.', 16, $this->getSourceContext()); })()), twig_array_merge((isset($context["route_parameters"]) || array_key_exists("route_parameters", $context) ? $context["route_parameters"] : (function () { throw new Twig_Error_Runtime('Variable "route_parameters" does not exist.', 16, $this->getSourceContext()); })()), array("sorting" => array("price" => "desc"), "criteria" => (isset($context["criteria"]) || array_key_exists("criteria", $context) ? $context["criteria"] : (function () { throw new Twig_Error_Runtime('Variable "criteria" does not exist.', 16, $this->getSourceContext()); })()))));
            // line 17
            echo "
";
            // line 18
            if (twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 18, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"))) {
                // line 19
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 20
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "asc"))) {
                // line 21
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 22
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "name", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 22, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "name", array()) == "desc"))) {
                // line 23
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 24
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 24, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "desc"))) {
                // line 25
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 26
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "createdAt", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "createdAt", array()) == "asc"))) {
                // line 27
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 28
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 28, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "asc"))) {
                // line 29
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first"));
            } elseif ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),             // line 30
($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "sorting"), "method", false, true), "price", array(), "any", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 30, $this->getSourceContext()); })()), "request", array()), "query", array()), "get", array(0 => "sorting"), "method"), "price", array()) == "desc"))) {
                // line 31
                echo "    ";
                $context["current_sorting_label"] = twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first"));
            }
            // line 33
            echo "
<div class=\"ui right floated small header\">
    <div class=\"content\">
        ";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.sort"), "html", null, true);
            echo "
        <div class=\"ui inline dropdown\">
            <div class=\"text\">";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["current_sorting_label"]) || array_key_exists("current_sorting_label", $context) ? $context["current_sorting_label"] : (function () { throw new Twig_Error_Runtime('Variable "current_sorting_label" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["default_path"]) || array_key_exists("default_path", $context) ? $context["default_path"] : (function () { throw new Twig_Error_Runtime('Variable "default_path" does not exist.', 41, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.by_position"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["from_a_to_z_path"]) || array_key_exists("from_a_to_z_path", $context) ? $context["from_a_to_z_path"] : (function () { throw new Twig_Error_Runtime('Variable "from_a_to_z_path" does not exist.', 42, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_a_to_z"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["from_z_to_a_path"]) || array_key_exists("from_z_to_a_path", $context) ? $context["from_z_to_a_path"] : (function () { throw new Twig_Error_Runtime('Variable "from_z_to_a_path" does not exist.', 43, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.from_z_to_a"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["newest_first_path"]) || array_key_exists("newest_first_path", $context) ? $context["newest_first_path"] : (function () { throw new Twig_Error_Runtime('Variable "newest_first_path" does not exist.', 44, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.newest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["oldest_first_path"]) || array_key_exists("oldest_first_path", $context) ? $context["oldest_first_path"] : (function () { throw new Twig_Error_Runtime('Variable "oldest_first_path" does not exist.', 45, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.oldest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["cheapest_first_path"]) || array_key_exists("cheapest_first_path", $context) ? $context["cheapest_first_path"] : (function () { throw new Twig_Error_Runtime('Variable "cheapest_first_path" does not exist.', 46, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.cheapest_first"), "html", null, true);
            echo "</a>
                <a class=\"item\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, (isset($context["most_expensive_first_path"]) || array_key_exists("most_expensive_first_path", $context) ? $context["most_expensive_first_path"] : (function () { throw new Twig_Error_Runtime('Variable "most_expensive_first_path" does not exist.', 47, $this->getSourceContext()); })()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.most_expensive_first"), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_bef606e5e2edba0228032645f4311c857b2c67a46346930f3e22d1b607775c0e->leave($__internal_bef606e5e2edba0228032645f4311c857b2c67a46346930f3e22d1b607775c0e_prof);

        
        $__internal_fd65d2637ba28b63052a474b3af53d403a5159481c98ef1ffc33d3ce1bb15177->leave($__internal_fd65d2637ba28b63052a474b3af53d403a5159481c98ef1ffc33d3ce1bb15177_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_sorting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  156 => 46,  148 => 45,  140 => 44,  132 => 43,  124 => 42,  116 => 41,  110 => 38,  105 => 36,  100 => 33,  96 => 31,  94 => 30,  91 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  79 => 24,  76 => 23,  74 => 22,  71 => 21,  69 => 20,  66 => 19,  64 => 18,  61 => 17,  59 => 16,  57 => 15,  55 => 14,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  44 => 9,  42 => 8,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if resources.data.nbResults > 0 %}

{% set definition = resources.definition %}

{% set route = app.request.attributes.get('_route') %}
{% set route_parameters = app.request.attributes.get('_route_params') %}

{% set criteria = app.request.query.get('criteria', {}) %}

{% set default_path = path(route, route_parameters|merge({'criteria': criteria})) %}
{% set from_a_to_z_path = path(route, route_parameters|merge({'sorting': {'name': 'asc'}, 'criteria': criteria})) %}
{% set from_z_to_a_path = path(route, route_parameters|merge({'sorting': {'name': 'desc'}, 'criteria': criteria})) %}
{% set oldest_first_path = path(route, route_parameters|merge({'sorting': {'createdAt': 'asc'}, 'criteria': criteria})) %}
{% set newest_first_path = path(route, route_parameters|merge({'sorting': {'createdAt': 'desc'}, 'criteria': criteria})) %}
{% set cheapest_first_path = path(route, route_parameters|merge({'sorting': {'price': 'asc'}, 'criteria': criteria})) %}
{% set most_expensive_first_path = path(route, route_parameters|merge({'sorting': {'price': 'desc'}, 'criteria': criteria})) %}

{% if app.request.query.get('sorting') is empty %}
    {% set current_sorting_label = 'sylius.ui.by_position'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.from_a_to_z'|trans|lower %}
{% elseif app.request.query.get('sorting').name is defined and app.request.query.get('sorting').name == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.from_z_to_a'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'desc'%}
    {% set current_sorting_label = 'sylius.ui.newest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').createdAt is defined and app.request.query.get('sorting').createdAt == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.oldest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'asc'%}
    {% set current_sorting_label = 'sylius.ui.cheapest_first'|trans|lower %}
{% elseif app.request.query.get('sorting').price is defined and app.request.query.get('sorting').price == 'desc' %}
    {% set current_sorting_label = 'sylius.ui.most_expensive_first'|trans|lower %}
{% endif %}

<div class=\"ui right floated small header\">
    <div class=\"content\">
        {{ 'sylius.ui.sort'|trans }}
        <div class=\"ui inline dropdown\">
            <div class=\"text\">{{ current_sorting_label }}</div>
            <i class=\"dropdown icon\"></i>
            <div class=\"menu\">
                <a class=\"item\" href=\"{{ default_path }}\" data-text=\"{{ 'sylius.ui.by_position'|trans|lower }}\">{{ 'sylius.ui.by_position'|trans }}</a>
                <a class=\"item\" href=\"{{ from_a_to_z_path }}\" data-text=\"{{ 'sylius.ui.from_a_to_z'|trans|lower }}\">{{ 'sylius.ui.from_a_to_z'|trans }}</a>
                <a class=\"item\" href=\"{{ from_z_to_a_path }}\" data-text=\"{{ 'sylius.ui.from_z_to_a'|trans|lower }}\">{{ 'sylius.ui.from_z_to_a'|trans }}</a>
                <a class=\"item\" href=\"{{ newest_first_path }}\" data-text=\"{{ 'sylius.ui.newest_first'|trans|lower }}\">{{ 'sylius.ui.newest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ oldest_first_path }}\" data-text=\"{{ 'sylius.ui.oldest_first'|trans|lower }}\">{{ 'sylius.ui.oldest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ cheapest_first_path }}\" data-text=\"{{ 'sylius.ui.cheapest_first'|trans|lower }}\">{{ 'sylius.ui.cheapest_first'|trans }}</a>
                <a class=\"item\" href=\"{{ most_expensive_first_path }}\" data-text=\"{{ 'sylius.ui.most_expensive_first'|trans|lower }}\">{{ 'sylius.ui.most_expensive_first'|trans }}</a>
            </div>
        </div>
    </div>
</div>
{% endif %}
", "@SyliusShop/Product/Index/_sorting.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Index\\_sorting.html.twig");
    }
}
