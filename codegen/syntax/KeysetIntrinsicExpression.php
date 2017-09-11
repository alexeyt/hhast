<?hh
/**
 * This file is generated. Do not modify it manually!
 *
 * @generated SignedSource<<c42c4948d6bee2db7aeff6b430ccba48>>
 */
namespace Facebook\HHAST;
use type Facebook\TypeAssert\TypeAssert;

final class KeysetIntrinsicExpression extends EditableSyntax {

  private EditableSyntax $_keyword;
  private EditableSyntax $_left_bracket;
  private EditableSyntax $_members;
  private EditableSyntax $_right_bracket;

  public function __construct(
    EditableSyntax $keyword,
    EditableSyntax $left_bracket,
    EditableSyntax $members,
    EditableSyntax $right_bracket,
  ) {
    parent::__construct('keyset_intrinsic_expression');
    $this->_keyword = $keyword;
    $this->_left_bracket = $left_bracket;
    $this->_members = $members;
    $this->_right_bracket = $right_bracket;
  }

  public static function from_json(
    array<string, mixed> $json,
    int $position,
    string $source,
  ): this {
    $keyword = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_keyword'],
      $position,
      $source,
    );
    $position += $keyword->width();
    $left_bracket = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_left_bracket'],
      $position,
      $source,
    );
    $position += $left_bracket->width();
    $members = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_members'],
      $position,
      $source,
    );
    $position += $members->width();
    $right_bracket = EditableSyntax::from_json(
      /* UNSAFE_EXPR */ $json['keyset_intrinsic_right_bracket'],
      $position,
      $source,
    );
    $position += $right_bracket->width();
    return new self($keyword, $left_bracket, $members, $right_bracket);
  }

  public function children(): KeyedTraversable<string, EditableSyntax> {
    yield 'keyword' => $this->_keyword;
    yield 'left_bracket' => $this->_left_bracket;
    yield 'members' => $this->_members;
    yield 'right_bracket' => $this->_right_bracket;
  }

  public function rewrite_children(
    self::TRewriter $rewriter,
    ?Traversable<EditableSyntax> $parents = null,
  ): this {
    $parents = $parents === null ? vec[] : vec($parents);
    $parents[] = $this;
    $keyword = $this->_keyword->rewrite($rewriter, $parents);
    $left_bracket = $this->_left_bracket->rewrite($rewriter, $parents);
    $members = $this->_members->rewrite($rewriter, $parents);
    $right_bracket = $this->_right_bracket->rewrite($rewriter, $parents);
    if (
      $keyword === $this->_keyword &&
      $left_bracket === $this->_left_bracket &&
      $members === $this->_members &&
      $right_bracket === $this->_right_bracket
    ) {
      return $this;
    }
    return new self($keyword, $left_bracket, $members, $right_bracket);
  }

  public function raw_keyword(): EditableSyntax {
    return $this->_keyword;
  }

  public function with_keyword(EditableSyntax $value): this {
    if ($value === $this->_keyword) {
      return $this;
    }
    return new self($value, $this->_left_bracket, $this->_members, $this->_right_bracket);
  }

  public function hasKeyword(): bool {
    return !$this->_keyword->is_missing();
  }

  public function keyword(): KeysetToken {
    return TypeAssert::isInstanceOf(KeysetToken::class, $this->_keyword);
  }

  public function raw_left_bracket(): EditableSyntax {
    return $this->_left_bracket;
  }

  public function with_left_bracket(EditableSyntax $value): this {
    if ($value === $this->_left_bracket) {
      return $this;
    }
    return new self($this->_keyword, $value, $this->_members, $this->_right_bracket);
  }

  public function hasLeftBracket(): bool {
    return !$this->_left_bracket->is_missing();
  }

  public function left_bracket(): LeftBracketToken {
    return TypeAssert::isInstanceOf(LeftBracketToken::class, $this->_left_bracket);
  }

  public function raw_members(): EditableSyntax {
    return $this->_members;
  }

  public function with_members(EditableSyntax $value): this {
    if ($value === $this->_members) {
      return $this;
    }
    return new self($this->_keyword, $this->_left_bracket, $value, $this->_right_bracket);
  }

  public function hasMembers(): bool {
    return !$this->_members->is_missing();
  }

  public function members(): ?EditableList {
    if ($this->_members->is_missing()) {
      return null;
    }
    return TypeAssert::isInstanceOf(EditableList::class, $this->_members);
  }

  public function membersx(): EditableList {
    return TypeAssert::isInstanceOf(EditableList::class, $this->_members);
  }

  public function raw_right_bracket(): EditableSyntax {
    return $this->_right_bracket;
  }

  public function with_right_bracket(EditableSyntax $value): this {
    if ($value === $this->_right_bracket) {
      return $this;
    }
    return new self($this->_keyword, $this->_left_bracket, $this->_members, $value);
  }

  public function hasRightBracket(): bool {
    return !$this->_right_bracket->is_missing();
  }

  public function right_bracket(): RightBracketToken {
    return TypeAssert::isInstanceOf(RightBracketToken::class, $this->_right_bracket);
  }
}