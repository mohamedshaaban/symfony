<?php

/* knp_menu.html.twig */
class __TwigTemplate_c9f5d15d7b0276f2d2be21423b8f15a0a37f330ca71e93a0d25682a78dd382bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu_base.html.twig", "knp_menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d89b9484949b86f9824824c0d16959021fc0dd1b380164388bd0731602f79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d89b9484949b86f9824824c0d16959021fc0dd1b380164388bd0731602f79e->enter($__internal_f9d89b9484949b86f9824824c0d16959021fc0dd1b380164388bd0731602f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $__internal_2cff937e228441c6369d2bf071caebb8d1f3c7d09285e65cb1c53551ded6a6fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cff937e228441c6369d2bf071caebb8d1f3c7d09285e65cb1c53551ded6a6fc->enter($__internal_2cff937e228441c6369d2bf071caebb8d1f3c7d09285e65cb1c53551ded6a6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9d89b9484949b86f9824824c0d16959021fc0dd1b380164388bd0731602f79e->leave($__internal_f9d89b9484949b86f9824824c0d16959021fc0dd1b380164388bd0731602f79e_prof);

        
        $__internal_2cff937e228441c6369d2bf071caebb8d1f3c7d09285e65cb1c53551ded6a6fc->leave($__internal_2cff937e228441c6369d2bf071caebb8d1f3c7d09285e65cb1c53551ded6a6fc_prof);

    }

    // line 11
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_990f788d0757e9cbe6c0c4ad6ae786d0e581de185bb0fda99078275fafadde12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_990f788d0757e9cbe6c0c4ad6ae786d0e581de185bb0fda99078275fafadde12->enter($__internal_990f788d0757e9cbe6c0c4ad6ae786d0e581de185bb0fda99078275fafadde12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        $__internal_e0207a8a6762068f5e4793bc7bec79c4333bfcd4dfc11470d8737931bfe88fa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0207a8a6762068f5e4793bc7bec79c4333bfcd4dfc11470d8737931bfe88fa0->enter($__internal_e0207a8a6762068f5e4793bc7bec79c4333bfcd4dfc11470d8737931bfe88fa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 12
        ob_start();
        // line 13
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e0207a8a6762068f5e4793bc7bec79c4333bfcd4dfc11470d8737931bfe88fa0->leave($__internal_e0207a8a6762068f5e4793bc7bec79c4333bfcd4dfc11470d8737931bfe88fa0_prof);

        
        $__internal_990f788d0757e9cbe6c0c4ad6ae786d0e581de185bb0fda99078275fafadde12->leave($__internal_990f788d0757e9cbe6c0c4ad6ae786d0e581de185bb0fda99078275fafadde12_prof);

    }

    // line 17
    public function block_root($context, array $blocks = array())
    {
        $__internal_c3ed7f1630a422779df95a79f8fdc6c1748743c82008cb1c9e04648f2464ae8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3ed7f1630a422779df95a79f8fdc6c1748743c82008cb1c9e04648f2464ae8b->enter($__internal_c3ed7f1630a422779df95a79f8fdc6c1748743c82008cb1c9e04648f2464ae8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_87ae665f94a2646f630064426cd0dc54e2aded3df123b6be7c67c351ce9c09df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ae665f94a2646f630064426cd0dc54e2aded3df123b6be7c67c351ce9c09df->enter($__internal_87ae665f94a2646f630064426cd0dc54e2aded3df123b6be7c67c351ce9c09df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 18
        $context["listAttributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 18, $this->getSourceContext()); })()), "childrenAttributes", array());
        // line 19
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_87ae665f94a2646f630064426cd0dc54e2aded3df123b6be7c67c351ce9c09df->leave($__internal_87ae665f94a2646f630064426cd0dc54e2aded3df123b6be7c67c351ce9c09df_prof);

        
        $__internal_c3ed7f1630a422779df95a79f8fdc6c1748743c82008cb1c9e04648f2464ae8b->leave($__internal_c3ed7f1630a422779df95a79f8fdc6c1748743c82008cb1c9e04648f2464ae8b_prof);

    }

    // line 22
    public function block_list($context, array $blocks = array())
    {
        $__internal_c823380d0b5e878e38f2454acdb4518c319ddf7c118229a4368345bc67acd250 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c823380d0b5e878e38f2454acdb4518c319ddf7c118229a4368345bc67acd250->enter($__internal_c823380d0b5e878e38f2454acdb4518c319ddf7c118229a4368345bc67acd250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_ae1ca76a97e07a00448d8b5b0a4b4cb258938fb83f8aafaf3d6190e505ab8ec9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1ca76a97e07a00448d8b5b0a4b4cb258938fb83f8aafaf3d6190e505ab8ec9->enter($__internal_ae1ca76a97e07a00448d8b5b0a4b4cb258938fb83f8aafaf3d6190e505ab8ec9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 23
        if (((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 23, $this->getSourceContext()); })()), "depth", array()) === 0)) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 23, $this->getSourceContext()); })()), "displayChildren", array()))) {
            // line 24
            echo "    ";
            $context["knp_menu"] = $this;
            // line 25
            echo "    <ul";
            echo $context["knp_menu"]->macro_attributes((isset($context["listAttributes"]) || array_key_exists("listAttributes", $context) ? $context["listAttributes"] : (function () { throw new Twig_Error_Runtime('Variable "listAttributes" does not exist.', 25, $this->getSourceContext()); })()));
            echo ">
        ";
            // line 26
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
        
        $__internal_ae1ca76a97e07a00448d8b5b0a4b4cb258938fb83f8aafaf3d6190e505ab8ec9->leave($__internal_ae1ca76a97e07a00448d8b5b0a4b4cb258938fb83f8aafaf3d6190e505ab8ec9_prof);

        
        $__internal_c823380d0b5e878e38f2454acdb4518c319ddf7c118229a4368345bc67acd250->leave($__internal_c823380d0b5e878e38f2454acdb4518c319ddf7c118229a4368345bc67acd250_prof);

    }

    // line 31
    public function block_children($context, array $blocks = array())
    {
        $__internal_071babe01a7913f26dd76b212bae113b51efdc5698cbfa908d8e8e6a7ad78074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071babe01a7913f26dd76b212bae113b51efdc5698cbfa908d8e8e6a7ad78074->enter($__internal_071babe01a7913f26dd76b212bae113b51efdc5698cbfa908d8e8e6a7ad78074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        $__internal_605e87d9b357154321623e3fb55e9477377795c7acbe622a319a19ee4ae0bddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605e87d9b357154321623e3fb55e9477377795c7acbe622a319a19ee4ae0bddb->enter($__internal_605e87d9b357154321623e3fb55e9477377795c7acbe622a319a19ee4ae0bddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 33
        $context["currentOptions"] = (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 33, $this->getSourceContext()); })());
        // line 34
        $context["currentItem"] = (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 34, $this->getSourceContext()); })());
        // line 36
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 36, $this->getSourceContext()); })()), "depth", array()))) {
            // line 37
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 37, $this->getSourceContext()); })()), array("depth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 37, $this->getSourceContext()); })()), "depth", array()) - 1)));
        }
        // line 40
        if (( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array())) && (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 40, $this->getSourceContext()); })()), "matchingDepth", array()) > 0))) {
            // line 41
            $context["options"] = twig_array_merge((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 41, $this->getSourceContext()); })()), array("matchingDepth" => (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 41, $this->getSourceContext()); })()), "matchingDepth", array()) - 1)));
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 43, $this->getSourceContext()); })()), "children", array()));
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
            // line 44
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        // line 47
        $context["item"] = (isset($context["currentItem"]) || array_key_exists("currentItem", $context) ? $context["currentItem"] : (function () { throw new Twig_Error_Runtime('Variable "currentItem" does not exist.', 47, $this->getSourceContext()); })());
        // line 48
        $context["options"] = (isset($context["currentOptions"]) || array_key_exists("currentOptions", $context) ? $context["currentOptions"] : (function () { throw new Twig_Error_Runtime('Variable "currentOptions" does not exist.', 48, $this->getSourceContext()); })());
        
        $__internal_605e87d9b357154321623e3fb55e9477377795c7acbe622a319a19ee4ae0bddb->leave($__internal_605e87d9b357154321623e3fb55e9477377795c7acbe622a319a19ee4ae0bddb_prof);

        
        $__internal_071babe01a7913f26dd76b212bae113b51efdc5698cbfa908d8e8e6a7ad78074->leave($__internal_071babe01a7913f26dd76b212bae113b51efdc5698cbfa908d8e8e6a7ad78074_prof);

    }

    // line 51
    public function block_item($context, array $blocks = array())
    {
        $__internal_e1c2c133e142568d3c9d7e446e2a1a0c182a205de5c016a4beee3c0b9df67216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c2c133e142568d3c9d7e446e2a1a0c182a205de5c016a4beee3c0b9df67216->enter($__internal_e1c2c133e142568d3c9d7e446e2a1a0c182a205de5c016a4beee3c0b9df67216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_a65468d7edb17447d7047d16b28e32733d75e6c7ddda22998e3b49d8b5da4adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a65468d7edb17447d7047d16b28e32733d75e6c7ddda22998e3b49d8b5da4adb->enter($__internal_a65468d7edb17447d7047d16b28e32733d75e6c7ddda22998e3b49d8b5da4adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 52
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 52, $this->getSourceContext()); })()), "displayed", array())) {
            // line 54
            $context["classes"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 54, $this->getSourceContext()); })()), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 55
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 55, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 55, $this->getSourceContext()); })())), "method")) {
                // line 56
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 56, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 56, $this->getSourceContext()); })()), "currentClass", array())));
            } elseif (twig_get_attribute($this->env, $this->getSourceContext(),             // line 57
(isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 57, $this->getSourceContext()); })()), "isAncestor", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 57, $this->getSourceContext()); })()), 1 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 57, $this->getSourceContext()); })()), "matchingDepth", array())), "method")) {
                // line 58
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 58, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 58, $this->getSourceContext()); })()), "ancestorClass", array())));
            }
            // line 60
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 60, $this->getSourceContext()); })()), "actsLikeFirst", array())) {
                // line 61
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 61, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 61, $this->getSourceContext()); })()), "firstClass", array())));
            }
            // line 63
            if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 63, $this->getSourceContext()); })()), "actsLikeLast", array())) {
                // line 64
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 64, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 64, $this->getSourceContext()); })()), "lastClass", array())));
            }
            // line 66
            echo "
    ";
            // line 68
            echo "    ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 68, $this->getSourceContext()); })()), "hasChildren", array()) &&  !(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 68, $this->getSourceContext()); })()), "depth", array()) === 0))) {
                // line 69
                echo "        ";
                if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 69, $this->getSourceContext()); })()), "branch_class", array())) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 69, $this->getSourceContext()); })()), "displayChildren", array()))) {
                    // line 70
                    $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 70, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 70, $this->getSourceContext()); })()), "branch_class", array())));
                    // line 71
                    echo "        ";
                }
                // line 72
                echo "    ";
            } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 72, $this->getSourceContext()); })()), "leaf_class", array()))) {
                // line 73
                $context["classes"] = twig_array_merge((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 73, $this->getSourceContext()); })()), array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 73, $this->getSourceContext()); })()), "leaf_class", array())));
            }
            // line 76
            $context["attributes"] = twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 76, $this->getSourceContext()); })()), "attributes", array());
            // line 77
            if ( !twig_test_empty((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 77, $this->getSourceContext()); })()))) {
                // line 78
                $context["attributes"] = twig_array_merge((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 78, $this->getSourceContext()); })()), array("class" => twig_join_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new Twig_Error_Runtime('Variable "classes" does not exist.', 78, $this->getSourceContext()); })()), " ")));
            }
            // line 81
            echo "    ";
            $context["knp_menu"] = $this;
            // line 82
            echo "    <li";
            echo $context["knp_menu"]->macro_attributes((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 82, $this->getSourceContext()); })()));
            echo ">";
            // line 83
            if (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })()), "uri", array())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["matcher"]) || array_key_exists("matcher", $context) ? $context["matcher"] : (function () { throw new Twig_Error_Runtime('Variable "matcher" does not exist.', 83, $this->getSourceContext()); })()), "isCurrent", array(0 => (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 83, $this->getSourceContext()); })())), "method") || twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 83, $this->getSourceContext()); })()), "currentAsLink", array())))) {
                // line 84
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 86
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 89
            $context["childrenClasses"] = (( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 89, $this->getSourceContext()); })()), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 90
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 90, $this->getSourceContext()); })()), array(0 => ("menu_level_" . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 90, $this->getSourceContext()); })()), "level", array()))));
            // line 91
            $context["listAttributes"] = twig_array_merge(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 91, $this->getSourceContext()); })()), "childrenAttributes", array()), array("class" => twig_join_filter((isset($context["childrenClasses"]) || array_key_exists("childrenClasses", $context) ? $context["childrenClasses"] : (function () { throw new Twig_Error_Runtime('Variable "childrenClasses" does not exist.', 91, $this->getSourceContext()); })()), " ")));
            // line 92
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
        
        $__internal_a65468d7edb17447d7047d16b28e32733d75e6c7ddda22998e3b49d8b5da4adb->leave($__internal_a65468d7edb17447d7047d16b28e32733d75e6c7ddda22998e3b49d8b5da4adb_prof);

        
        $__internal_e1c2c133e142568d3c9d7e446e2a1a0c182a205de5c016a4beee3c0b9df67216->leave($__internal_e1c2c133e142568d3c9d7e446e2a1a0c182a205de5c016a4beee3c0b9df67216_prof);

    }

    // line 97
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_5f09961e2125de800f997bd37fb888ded8c65697dd2a1d27334aafa813396aa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f09961e2125de800f997bd37fb888ded8c65697dd2a1d27334aafa813396aa6->enter($__internal_5f09961e2125de800f997bd37fb888ded8c65697dd2a1d27334aafa813396aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_c4505a64034a22a7ef25d30211384d8212a7b8e44a132e5c348b904efaa7ce5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4505a64034a22a7ef25d30211384d8212a7b8e44a132e5c348b904efaa7ce5a->enter($__internal_c4505a64034a22a7ef25d30211384d8212a7b8e44a132e5c348b904efaa7ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $context["knp_menu"] = $this;
        echo "<a href=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 97, $this->getSourceContext()); })()), "linkAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_c4505a64034a22a7ef25d30211384d8212a7b8e44a132e5c348b904efaa7ce5a->leave($__internal_c4505a64034a22a7ef25d30211384d8212a7b8e44a132e5c348b904efaa7ce5a_prof);

        
        $__internal_5f09961e2125de800f997bd37fb888ded8c65697dd2a1d27334aafa813396aa6->leave($__internal_5f09961e2125de800f997bd37fb888ded8c65697dd2a1d27334aafa813396aa6_prof);

    }

    // line 99
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_d7eaa1d99b71d21d1e3203d93059876b81ba59d515eb0d6a5f6ad2724d341a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7eaa1d99b71d21d1e3203d93059876b81ba59d515eb0d6a5f6ad2724d341a1e->enter($__internal_d7eaa1d99b71d21d1e3203d93059876b81ba59d515eb0d6a5f6ad2724d341a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_ac81c8a2ef3b7cbd1f258356e95e36c6db059ff2ba43f1179eadf08cae8623ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac81c8a2ef3b7cbd1f258356e95e36c6db059ff2ba43f1179eadf08cae8623ff->enter($__internal_ac81c8a2ef3b7cbd1f258356e95e36c6db059ff2ba43f1179eadf08cae8623ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $context["knp_menu"] = $this;
        echo "<span";
        echo $context["knp_menu"]->macro_attributes(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 99, $this->getSourceContext()); })()), "labelAttributes", array()));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
        
        $__internal_ac81c8a2ef3b7cbd1f258356e95e36c6db059ff2ba43f1179eadf08cae8623ff->leave($__internal_ac81c8a2ef3b7cbd1f258356e95e36c6db059ff2ba43f1179eadf08cae8623ff_prof);

        
        $__internal_d7eaa1d99b71d21d1e3203d93059876b81ba59d515eb0d6a5f6ad2724d341a1e->leave($__internal_d7eaa1d99b71d21d1e3203d93059876b81ba59d515eb0d6a5f6ad2724d341a1e_prof);

    }

    // line 101
    public function block_label($context, array $blocks = array())
    {
        $__internal_8b73d19266a18b5b1e1a29c64f7cc7cf6e348f65dc8e2b20811dab3a82a53eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b73d19266a18b5b1e1a29c64f7cc7cf6e348f65dc8e2b20811dab3a82a53eec->enter($__internal_8b73d19266a18b5b1e1a29c64f7cc7cf6e348f65dc8e2b20811dab3a82a53eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_b2aab4bf2c3d9079e4d475551e43986c5d1cc5ed41b90ad1a159c6102710016c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2aab4bf2c3d9079e4d475551e43986c5d1cc5ed41b90ad1a159c6102710016c->enter($__internal_b2aab4bf2c3d9079e4d475551e43986c5d1cc5ed41b90ad1a159c6102710016c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 101, $this->getSourceContext()); })()), "allow_safe_labels", array()) && twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array());
        } else {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 101, $this->getSourceContext()); })()), "label", array()), "html", null, true);
        }
        
        $__internal_b2aab4bf2c3d9079e4d475551e43986c5d1cc5ed41b90ad1a159c6102710016c->leave($__internal_b2aab4bf2c3d9079e4d475551e43986c5d1cc5ed41b90ad1a159c6102710016c_prof);

        
        $__internal_8b73d19266a18b5b1e1a29c64f7cc7cf6e348f65dc8e2b20811dab3a82a53eec->leave($__internal_8b73d19266a18b5b1e1a29c64f7cc7cf6e348f65dc8e2b20811dab3a82a53eec_prof);

    }

    // line 3
    public function macro_attributes($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_498ba994de07a6b42fe5cdf581c4647ffb641fc1e8b3c82a938f0a82c4c920f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_498ba994de07a6b42fe5cdf581c4647ffb641fc1e8b3c82a938f0a82c4c920f1->enter($__internal_498ba994de07a6b42fe5cdf581c4647ffb641fc1e8b3c82a938f0a82c4c920f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            $__internal_dbb321a59bc905f8f733012d49f8cb0b7d925823dd141043de55961d84fe2d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dbb321a59bc905f8f733012d49f8cb0b7d925823dd141043de55961d84fe2d94->enter($__internal_dbb321a59bc905f8f733012d49f8cb0b7d925823dd141043de55961d84fe2d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new Twig_Error_Runtime('Variable "attributes" does not exist.', 4, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 5
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 6
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_dbb321a59bc905f8f733012d49f8cb0b7d925823dd141043de55961d84fe2d94->leave($__internal_dbb321a59bc905f8f733012d49f8cb0b7d925823dd141043de55961d84fe2d94_prof);

            
            $__internal_498ba994de07a6b42fe5cdf581c4647ffb641fc1e8b3c82a938f0a82c4c920f1->leave($__internal_498ba994de07a6b42fe5cdf581c4647ffb641fc1e8b3c82a938f0a82c4c920f1_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 6,  383 => 5,  379 => 4,  361 => 3,  339 => 101,  316 => 99,  291 => 97,  276 => 92,  274 => 91,  272 => 90,  270 => 89,  266 => 86,  262 => 84,  260 => 83,  256 => 82,  253 => 81,  250 => 78,  248 => 77,  246 => 76,  243 => 73,  240 => 72,  237 => 71,  235 => 70,  232 => 69,  229 => 68,  226 => 66,  223 => 64,  221 => 63,  218 => 61,  216 => 60,  213 => 58,  211 => 57,  209 => 56,  207 => 55,  205 => 54,  203 => 52,  194 => 51,  184 => 48,  182 => 47,  165 => 44,  148 => 43,  145 => 41,  143 => 40,  140 => 37,  138 => 36,  136 => 34,  134 => 33,  125 => 31,  111 => 26,  106 => 25,  103 => 24,  101 => 23,  92 => 22,  82 => 19,  80 => 18,  71 => 17,  58 => 13,  56 => 12,  47 => 11,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu_base.html.twig' %}

{% macro attributes(attributes) %}
{% for name, value in attributes %}
    {%- if value is not none and value is not same as(false) -%}
        {{- ' %s=\"%s\"'|format(name, value is same as(true) ? name|e : value|e)|raw -}}
    {%- endif -%}
{%- endfor -%}
{% endmacro %}

{% block compressed_root %}
{% spaceless %}
{{ block('root') }}
{% endspaceless %}
{% endblock %}

{% block root %}
{% set listAttributes = item.childrenAttributes %}
{{ block('list') -}}
{% endblock %}

{% block list %}
{% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
    {% import _self as knp_menu %}
    <ul{{ knp_menu.attributes(listAttributes) }}>
        {{ block('children') }}
    </ul>
{% endif %}
{% endblock %}

{% block children %}
{# save current variables #}
{% set currentOptions = options %}
{% set currentItem = item %}
{# update the depth for children #}
{% if options.depth is not none %}
{% set options = options|merge({'depth': currentOptions.depth - 1}) %}
{% endif %}
{# update the matchingDepth for children #}
{% if options.matchingDepth is not none and options.matchingDepth > 0 %}
{% set options = options|merge({'matchingDepth': currentOptions.matchingDepth - 1}) %}
{% endif %}
{% for item in currentItem.children %}
    {{ block('item') }}
{% endfor %}
{# restore current variables #}
{% set item = currentItem %}
{% set options = currentOptions %}
{% endblock %}

{% block item %}
{% if item.displayed %}
{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
    {%- if matcher.isCurrent(item) %}
        {%- set classes = classes|merge([options.currentClass]) %}
    {%- elseif matcher.isAncestor(item, options.matchingDepth) %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
    {%- endif %}
    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

    {# Mark item as \"leaf\" (no children) or as \"branch\" (has children that are displayed) #}
    {% if item.hasChildren and options.depth is not same as(0) %}
        {% if options.branch_class is not empty and item.displayChildren %}
            {%- set classes = classes|merge([options.branch_class]) %}
        {% endif %}
    {% elseif options.leaf_class is not empty %}
        {%- set classes = classes|merge([options.leaf_class]) %}
    {%- endif %}

    {%- set attributes = item.attributes %}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
{# displaying the item #}
    {% import _self as knp_menu %}
    <li{{ knp_menu.attributes(attributes) }}>
        {%- if item.uri is not empty and (not matcher.isCurrent(item) or options.currentAsLink) %}
        {{ block('linkElement') }}
        {%- else %}
        {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    </li>
{% endif %}
{% endblock %}

{% block linkElement %}{% import _self as knp_menu %}<a href=\"{{ item.uri }}\"{{ knp_menu.attributes(item.linkAttributes) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}{% import _self as knp_menu %}<span{{ knp_menu.attributes(item.labelAttributes) }}>{{ block('label') }}</span>{% endblock %}

{% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label }}{% endif %}{% endblock %}
", "knp_menu.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu.html.twig");
    }
}
